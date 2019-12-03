<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // dd((\Auth::check()));
        $names = explode(" ", auth()->user()->firstName);
        $name = $names[0];
        $lastnames = explode(" ", auth()->user()->lastName);
        $lastname= $lastnames[0];
        
        return view('home', compact('lastname', 'name'));
    }
}
