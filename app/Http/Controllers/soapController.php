<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\View\View;

class soapController extends Controller
{
    function BasicSoap(){
        $questions =Question::all();
        $options = Option::all();
        return view('pages.soap.basicSoap',compact('questions','options'));
    }
    function basicSoapQuestion(Request $request){

    }
    function GeneralSoap(){
        $questions =Question::all();
        $options = Option::all();
        return view('pages.soap.generalSoap',compact('questions','options'));
    }

    function DetailSoap(){
        $questions =Question::all();
        $options = Option::all();
        return view('pages.soap.detailedSoap',compact('questions','options'));
    }
}
