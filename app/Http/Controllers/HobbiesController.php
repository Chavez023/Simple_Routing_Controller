<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = "I love playing games, reading about programming languages, and foreign languages. Most importantly, I thoroughly enjoy discovering new things that I don’t know or that might possibly happen.";
        return view('hobbies',compact('data'));
    }
}
