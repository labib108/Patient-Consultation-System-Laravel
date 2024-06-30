<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\BasicSoapAnswer;
use App\Models\BasicSoapOption;
use App\Models\BasicSoapOtherQuestionAnswer;
use App\Models\BasicSoapQuestion;
use App\Models\GeneralSoapAnswer;
use App\Models\GeneralSoapOption;
use App\Models\GeneralSoapOtherAnswer;
use App\Models\GeneralSoapQuestion;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report( Request $request){
        return view('pages.report.report');
    }
    public function fetchData(Request $request)
    {
        $appointment_id = $request->input('appointment_id');

        // Fetch data from the database based on the provided appointment ID
        $appointment = Appointment::find($appointment_id);


        if($appointment) {

            $history = History::where('appointment_id', $appointment_id)->get();
            $basicSoapQuestion = BasicSoapQuestion::all();
            $basicSoapOption = BasicSoapOption::all();
            $basicSoapAnswer = BasicSoapAnswer::where('appointment_id',$appointment_id)->get();
            $basicSoapOtherAnswer = BasicSoapOtherQuestionAnswer::where('appointment_id',$appointment_id)->get();
            $generalSoapQuestion = GeneralSoapQuestion::all();
            $generalSoapOption = GeneralSoapOption::all();
            $generalSoapAnswer = GeneralSoapAnswer::where('appointment_id',$appointment_id)->get();
            $generalSoapOtherAnswer = GeneralSoapOtherAnswer::where('appointment_id',$appointment_id)->get();

            $patientDataColumn = DB::table('detail_soap_answers')
                ->where('patient_id', $appointment_id)
                ->pluck('patient_data');

           $patient_datas = json_decode($patientDataColumn, true);

            $patient_data_array = json_decode($patient_datas[0], true);
           // return var_dump($patient_data_array);

            // If data found, return it in JSON format
            return view('pages.report.report-data',compact('appointment','history','basicSoapQuestion','basicSoapOption','basicSoapAnswer','basicSoapOtherAnswer','generalSoapQuestion','generalSoapOption','generalSoapAnswer','generalSoapOtherAnswer' ,'patient_data_array'));
        } else {
            // If no data found, return a JSON response with a message
            return '<div class="alert alert-warning" role="alert">
            No appointment data available.
        </div>';
        }
    }
}
