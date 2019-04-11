<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;
use App\SkillType;

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
        $skill_types = SkillType::all();

        return view('pages.skills')->with('skill_types', $skill_types);
    }
}
