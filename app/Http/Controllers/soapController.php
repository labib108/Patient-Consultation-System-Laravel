<?php

namespace App\Http\Controllers;

use App\Models\BasicSoapOption;
use App\Models\BasicSoapQuestion;
use Illuminate\Http\Request;
use Illuminate\View\View;

class soapController extends Controller
{
    function BasicSoap(){
        $questions  = BasicSoapQuestion::all();
        $options = BasicSoapOption::all();
        return view('pages.soap.basicSoap',compact('questions', 'options'));
    }

    function GeneralSoap(){

        return view('pages.soap.generalSoap');
    }

    function DetailSoap(){

        return view('pages.soap.detailedSoap');
    }
}
