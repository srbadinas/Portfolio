<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\User;
use App\Skill;
use App\SkillType;
use App\Experience;
use App\Education;
use App\Project;
use Config;
use Image;

class PageController extends Controller
{
    protected $user_data;

    public function __construct() {
        $this->user_data = User::all()->first();
    }

    public function index()
    {
        $intro = Config::get('utils.messages.quote');

        return view('pages.home', ['intro' => $intro, 'user_data' => $this->user_data]);
    }

    public function getAbout() 
    {
        return view('pages.about', ['user_data' => $this->user_data]);
    }

    public function getSkills() 
    {
        $skill_types = SkillType::all();

        return view('pages.skills', ['skill_types' => $skill_types, 'user_data' => $this->user_data]);
    }

    public function getExperiences() 
    {
        $experiences = Experience::all();

        return view('pages.experience', ['experiences' => $experiences, 'user_data' => $this->user_data]);
    }

    public function getEducation() 
    {
        $education = Education::all();

        return view('pages.education', ['education' => $education, 'user_data' => $this->user_data]);
    }

    public function getProjects() 
    {
        $projects = Project::all();

        return view('pages.project', ['projects' => $projects, 'user_data' => $this->user_data]);
    }

    
}
