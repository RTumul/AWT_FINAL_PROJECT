<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    function home(){
        return view('index.home');
    }

    function registration(){
        return view('index.registration');
    }

    function login(){
        return view('public.login');
    }
}
