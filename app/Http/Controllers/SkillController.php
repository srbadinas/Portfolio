<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Skill;
use App\SkillType;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::orderByDesc('id')->paginate(15);
        return view('admin.skills.index', ['skills' => $skills, 'viewers' => $this->getViewers()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill_types = SkillType::pluck('name', 'id');
        return view('admin.skills.create', ['skill_types' => $skill_types,'viewers' => $this->getViewers()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'skill_type_id' => 'required'
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->skill_type_id = $request->skill_type_id;

        $skill->save();

        Session::flash('success', "Skill has been added.");

        return redirect()->route('skills.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        $skill_types = SkillType::pluck('name', 'id');

        return view('admin.skills.edit', ['skill' => $skill, 'skill_types' => $skill_types, 'viewers' => $this->getViewers()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
