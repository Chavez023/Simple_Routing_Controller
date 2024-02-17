<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = "I am Charles Chavez A web and App develper";
        return view('about-me',compact('data'));
    }
}
