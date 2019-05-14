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

    public function register(Request $request) {
        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'career' => 'required',
            'contact_number' => 'required|numeric|digits:12',
        ]);

        $user = new User();
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/' . $filename);
            Image::make($image)->resize(200, 200)->save($location);
            $user->picture_url = $filename;
        }
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->career = $request->career;
        $user->contact_number = $request->contact_number;
        $user->save();

        Session::flash('success', Config::get('utils.constants.messages.user_creation_success'));

        return redirect('/login');
    }

}
