<?php

namespace App\Http\Controllers;

class ConnexionController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function redirection()
    {
        return view('redirection');
    }
}