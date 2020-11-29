<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
	function index_admin()
    {
        return view('index_admin');
    }
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
    function galeri()
    {
        return view('galeri');
    }
    function artikel1()
    {
        return view('artikel1');
    }
    function artikel2()
    {
        return view('artikel2');
    }
    function contact()
    {
        return view('contact');
    }
    function login()
    {
        return view('login');
    }
}

