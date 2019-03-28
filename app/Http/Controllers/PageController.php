<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function getAbout() 
    {
        return view('pages.about');
    }

    public function getInformation() 
    {
        return view('pages.information');
    }

    public function getSkills() 
    {
        $skills = [
                [
                    'name' => "Programming Languages",
                    
                    'list' => [
                    'name' => "C#",
                    'name' => "PHP",
                ]
            ],
        ];


        return view('pages.skills')->with('skills', $skills);
    }
}
