<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\View\View;

class soapController extends Controller
{
    function BasicSoap(){
        return view('pages.soap.basicSoap');
    }

    function GeneralSoap(){

        return view('pages.soap.generalSoap');
    }

    function DetailSoap(){

        return view('pages.soap.detailedSoap');
    }
}
