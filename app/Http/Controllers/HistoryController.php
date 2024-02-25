<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    function historyPage(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {//get all data from appointment table
        $histories = History::with('appointment')->get();
        return view('pages.dashboard.history',compact('histories'));
    }

    function NewHistory(Request $request){
        try {
            History::create([
                'appointment_id' => $request->appointment_id,
                'condition' => $request->condition,
                'symptoms' => $request->symptoms,
                'injuries' => $request->injuries,
                'other' => $request->other,
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
}
