<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view("landing.home");
    }

    function about()
    {
        return view("landing.about");
    }

    function programs()
    {
        return view("landing.programs");
    }

    function contact()
    {
        return view("landing.contact");
    }

    function article()
    {
        return view("landing.article");
    }

    function strategy()
    {
        return view("landing.strategy");
    }
}
