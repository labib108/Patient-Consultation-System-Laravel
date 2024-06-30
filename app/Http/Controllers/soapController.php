<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\BasicSoapAnswer;
use App\Models\BasicSoapOption;
use App\Models\BasicSoapOtherQuestionAnswer;
use App\Models\BasicSoapQuestion;
use App\Models\DetailSoapAnswer;
use App\Models\GeneralSoapAnswer;
use App\Models\GeneralSoapOption;
use App\Models\GeneralSoapOtherAnswer;
use App\Models\GeneralSoapQuestion;
use App\Models\History;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Exceptions\PostTooLargeException;
class soapController extends Controller
{
    function BasicSoap(){
        $questions  = BasicSoapQuestion::all();
        $options = BasicSoapOption::all();
        return view('pages.soap.basicSoap',compact('questions', 'options'));
    }
    function GeneralSoap(){
        $questions  = GeneralSoapQuestion::all();
        $options = GeneralSoapOption::all();
        return view('pages.soap.generalSoap',compact('questions', 'options'));
    }
    function DetailSoap(){

        return view('pages.soap.detailedSoap');
    }
    //Basic Soap answer save
    public function saveAnswers(Request $request)
    {
        $appointmentId = $request->input('appointment_id');
        $answers = $request->input('basic_soap_answer', []);
        $otherTexts = $request->input('basic_soap_Other_textarea', []);

        $basic_soap_treatment_textarea = $request->input('basic_soap_treatment_textarea');
        $basic_soap_subjective_notes_textarea = $request->input('basic_soap_subjective_notes_textarea');
        $basic_soap_objective_notes_textarea = $request->input('basic_soap_objective_notes_textarea');
        $basic_soap_assessment_notes_textarea = $request->input('basic_soap_assessment_notes_textarea');
        $basic_soap_treatment_plan_textarea = $request->input('basic_soap_treatment_plan_textarea');
        $uploadedFile = $request->file('fileInput');
        $path = $uploadedFile->store('document', 'public');

        foreach ($answers as $questionId => $selectedOptions) {
            foreach ($selectedOptions as $selectedOption) {
                try {
                    BasicSoapAnswer::create([
                        'appointment_id' => $appointmentId,
                        'basic_soap_question_id' => $questionId,
                        'basic_soap_option_id' => $selectedOption,
                        'basic_soap_answer' => is_array($selectedOption) ? json_encode($selectedOption) : $selectedOption,
                    ]);
                }catch (PostTooLargeException $e) {
                    return '<div class="alert alert-warning" role="alert">
                        Something went wrong. Please try again.
                        </div>';
                }
            }
        }
        foreach ($otherTexts as $questionId => $otherText) {
            try {
                BasicSoapAnswer::create([
                    'appointment_id' => $appointmentId,
                    'basic_soap_question_id' => $questionId,
                    'basic_soap_option_id' => null,
                    'basic_soap_answer' => is_array($otherTexts) ? json_encode($otherTexts) : $otherTexts,
                ]);
            }catch (PostTooLargeException $e) {
                return '<div class="alert alert-warning" role="alert">
                        Something went wrong. Please try again.
                        </div>';
            }
        }

        try {
            BasicSoapOtherQuestionAnswer::create([
                'appointment_id' => $appointmentId,
                'treatment_goal' => $basic_soap_treatment_textarea,
                'image' => $path,
                'subjective' => $basic_soap_subjective_notes_textarea,
                'objective' => $basic_soap_objective_notes_textarea,
                'assessment' => $basic_soap_assessment_notes_textarea,
                'plan' => $basic_soap_treatment_plan_textarea,
                'document' => $path
            ]);
        }catch (PostTooLargeException $e) {
            return '<div class="alert alert-warning" role="alert">
            Something went wrong. Please try again.
        </div>';
        }
        return redirect()->route('generalSoapPage');
    }


    //General Soap answer save
    public function saveGeneralAnswers(Request $request)
    {
        $appointmentId = $request->input('appointment_id');
        $answers = $request->input('general_soap_answer', []);

        $general_soap_treatment_textarea = $request->input('general_soap_treatment_textarea');
        $general_soap_appointment_notes_textarea = $request->input('general_soap_appointment_notes_textarea');

        foreach ($answers as $questionId => $selectedOptions) {
            foreach ($selectedOptions as $selectedOption) {
                GeneralSoapAnswer::create([
                    'appointment_id' => $appointmentId,
                    'general_soap_question_id' => $questionId,
                    'general_soap_option_id' => $selectedOption,
                    'general_soap_answer' => is_array($selectedOption) ? json_encode($selectedOption) : $selectedOption,
                ]);
            }
        }

        try {
            GeneralSoapOtherAnswer::create([
                'appointment_id' => $appointmentId,
                'treatment_goal' => $general_soap_treatment_textarea,
                'appointment_note' => $general_soap_appointment_notes_textarea
                ]);
        }catch (PostTooLargeException $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong',
            ]);
        }

        return redirect()->route('generalSoapPage');
    }

    //Detail soap answer save
    public function saveDetailAnswers(Request $request)
    {
        $appointmentId = $request->input('appointment_id');
        $requestData = $request->except('_token', 'file');
        $uploadedFile = $request->file('file');
        $path = $uploadedFile ? $uploadedFile->store('document', 'public') : null;
       // $requestData['file'] = $path;

        foreach ($request->input('details') as $detail) {
            // Check if a record already exists with the same patient ID and unique ID
            $existingRecord = DetailSoapAnswer::where('patient_id', $appointmentId)
                ->where('id', $detail['id']) // Assuming you have a column named 'unique_id'
                ->first();
            if (!$existingRecord) {
                $soapAnswer = new DetailSoapAnswer();
                $soapAnswer->patient_id = $appointmentId;
                $soapAnswer->patient_data = json_encode($detail);
                $soapAnswer->file = $path;
                $soapAnswer->save();
            }
        }
        return redirect()->route('generalSoapPage');
    }

    public function basicReport(Request $request)
    {
        return view('pages.soap.basicSoapNotesReports');
    }
    public function basicReportData(Request $request)
    {
        $appointment_id = $request->input('appointment_id');
        $appointment = Appointment::find($appointment_id);

        if($appointment) {

            $basicSoapQuestion = BasicSoapQuestion::all();
            $basicSoapOption = BasicSoapOption::all();
            $basicSoapAnswer = BasicSoapAnswer::where('appointment_id',$appointment_id)->get();
            $basicSoapOtherAnswer = BasicSoapOtherQuestionAnswer::where('appointment_id',$appointment_id)->get();

            $groupedAnswers = $basicSoapAnswer->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('Y-m-d');
            });
            $groupedOtherAnswers = $basicSoapOtherAnswer->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('Y-m-d');
            });
            // If data found, return it in JSON format
            return view('pages.soap.basicSoapReportData',compact('appointment','basicSoapQuestion','basicSoapOption','basicSoapAnswer','basicSoapOtherAnswer','groupedAnswers','groupedOtherAnswers'));
        } else {
            // If no data found, return a JSON response with a message
            return '<div class="alert alert-warning" role="alert">
            No appointment data available.
        </div>';
        }
    }

    public function generalReport(Request $request)
    {
        return view('pages.soap.generalSoapNotesReports');
    }
    public function generalReportData(Request $request)
    {
        $appointment_id = $request->input('appointment_id');
        $appointment = Appointment::find($appointment_id);

        if($appointment) {

            $generalSoapQuestion = GeneralSoapQuestion::all();
            $generalSoapOption = GeneralSoapOption::all();
            $generalSoapAnswer = GeneralSoapAnswer::where('appointment_id',$appointment_id)->get();
            $generalSoapOtherAnswer = GeneralSoapOtherAnswer::where('appointment_id',$appointment_id)->get();

            $groupedAnswers = $generalSoapAnswer->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('Y-m-d H:i:s');
            });

            $groupedOtherAnswers = $generalSoapOtherAnswer->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('Y-m-d H:i:s');
            });
            // If data found, return it in JSON format
            return view('pages.soap.generalSoapNoteData',compact('appointment','generalSoapQuestion','generalSoapOption','generalSoapAnswer','generalSoapOtherAnswer','groupedAnswers','groupedOtherAnswers'));
        } else {
            // If no data found, return a JSON response with a message
            return '<div class="alert alert-warning" role="alert">
            No appointment data available.
        </div>';
        }
    }
    public function detailSoapReport(Request $request)
    {
        return view('pages.soap.detailsSoapNotesReports');
    }
    public function detailReportData(Request $request)
    {
        $appointment_id = $request->input('appointment_id');
        $appointment = Appointment::find($appointment_id);

        if($appointment) {

            $patientDataColumn = DB::table('detail_soap_answers')
                ->where('patient_id', $appointment_id)
                ->pluck('patient_data');

            $patient_datas = json_decode($patientDataColumn, true);

            $patient_data_array = json_decode($patient_datas[0], true);
            // If data found, return it in JSON format
            return view('pages.soap.detailSoapNoteData',compact('appointment','patient_data_array'));
        } else {
            // If no data found, return a JSON response with a message
            return '<div class="alert alert-warning" role="alert">
            No appointment data available.
        </div>';
        }
    }
}


