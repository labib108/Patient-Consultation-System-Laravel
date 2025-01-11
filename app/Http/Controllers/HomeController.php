<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    function HomePage():View{
        return view('pages.home.home');
    }
    function AboutPage():View{
        return view('pages.home.about');
    }
}