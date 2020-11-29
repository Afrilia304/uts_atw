<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    function home()
    {
        return view('index');
    }
    function user()
    {
        return view('index_user');
    }
    function artikel()
    {
        return view('artikel');
    }
    function about()
    {
        return view('about');
    }
}

