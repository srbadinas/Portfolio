<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;
use App\SkillType;
use App\Experience;
use App\Education;

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

    public function getSkills() 
    {
        $skill_types = SkillType::all();

        return view('pages.skills')->with('skill_types', $skill_types);
    }

    public function getExperiences() 
    {
        $experiences = Experience::all();

        return view('pages.experience')->with('experiences', $experiences);
    }

    public function getEducation() 
    {
        $education = Education::all();

        return view('pages.education')->with('education', $education);
    }

    
}
