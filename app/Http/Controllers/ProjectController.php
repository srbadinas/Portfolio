<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\ProjectImage;
use App\Session;

use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(15);

        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
            'name' => 'required|max: 150',
            'highlight' => 'required|max: 150',
            'link' => 'max:150',
            'description' => 'required|max: 4000',
            'company' => 'max:150',
        ]);

        $project = new Project();

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/project/thumbnail' . $filename);
            Image::make($image)->resize(400, 300)->save($location);
            $project->thumbnail = $filename;
        }

        $project->name = $request->name;
        $project->highlight = $request->highlight;
        $project->link = $request->link;
        $project->description = $request->description;
        $project->company = $request->company;

        $project->save();


        if ($request->hasFile('images')) {
            foreach($request->images as $key => $item) {
                $project_image = new ProjectImage();
                $image = $item;
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/project/images' . $filename);
                Image::make($image)->resize(400, 300)->save($location);
                $project_image->project_id = $project->id;
                $project_image->image_url = $filename;
                $project_image->order = $key + 1;
                $project_image->save();
            }
        }

        Session::flash('success', "Project has been created.");

        return route('projects.details', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
