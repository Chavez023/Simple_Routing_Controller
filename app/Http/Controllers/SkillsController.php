<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = "Knowledgable in Microsft suite (Microsoft , Excel and Powerpoint),Knowledgabel in HTML, CSS and Kotlin, being a Multitasking person.";
        return view('skills',compact('data'));
    }
}
