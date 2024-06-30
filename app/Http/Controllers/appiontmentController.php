<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\patient;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;


class appiontmentController extends Controller
{
    function appointmentPage(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $appointment = Appointment::all(); //get all data from appointment table
        return view('pages.dashboard.appointment', compact('appointment'));
    }
    function clientPage(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $appointment = Appointment::all(); //get all data from appointment table
        return view('pages.dashboard.client', compact('appointment'));
    }

    function NewAppointment(Request $request){
        try {
            Appointment::create([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'dob' => $request->dob,
                'gender' => $request->sex,
                'date' => $request->date
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Appointment created successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong',
            ]);
        }
    }
    function editAppointment($appointmentId) {
        $appointment = Appointment::find($appointmentId);
        return view('pages.dashboard.EditAppointment', compact('appointment'));
    }
    function updateAppointment(Request $request, $id){
        try {
            $appointment = Appointment::find($id);
            $appointment->update([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'dob' => $request->dob,
                'gender' => $request->sex,
                'date' => $request->date
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Appointment updated successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong.Try again',
            ]);
        }
    }
    function deleteappointment($id){
        try {
            $appointment = Appointment::find($id);
            $appointment->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Appointment deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete appointment',
            ], 500);
        }
    }
}
