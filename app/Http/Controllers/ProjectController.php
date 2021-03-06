<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Project;
use App\ProjectImage;

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
        $projects = Project::orderBy('order', 'ASC')->paginate(15);
        return view('admin.projects.index', ['projects' => $projects, 'viewers' => $this->getViewers()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create', ['viewers' => $this->getViewers()]);
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
            'thumbnail' => 'required|max: 100|mimes: jpg, jpeg, png|dimensions: min_width=400, min_height=300',
        ]);

        $project = new Project();

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/project/thumbnail/' . $filename);
            Image::make($image)->resize(400, 300)->save($location);
            $project->thumbnail = $filename;
        }

        $max_count = Project::all()->count();

        $project->name = $request->name;
        $project->order = $max_count + 1;
        $project->highlight = $request->highlight;
        $project->link = $request->link;
        $project->description = $request->description;
        $project->company = $request->company;

        $project->save();


        // if ($request->hasFile('images')) {
        //     foreach($request->images as $key => $item) {
        //         $project_image = new ProjectImage();
        //         $image = $item;
        //         $filename = time() . '.' . $image->getClientOriginalExtension();
        //         $location = public_path('img/project/images/' . $filename);
        //         Image::make($image)->resize(800, 370)->save($location);
        //         $project_image->project_id = $project->id;
        //         $project_image->image_url = $filename;
        //         $project_image->order = $key + 1;
        //         $project_image->save();
        //     }
        // }

        Session::flash('success', "Project has been created.");

        return redirect()->route('projects.edit', $project->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit', ['project' => $project, 'viewers' => $this->getViewers()]);
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
        $this->validate($request, [
            'name' => 'required|max: 150',
            'highlight' => 'required|max: 150',
            'link' => 'max:150',
            'description' => 'required|max: 4000',
            'company' => 'max:150',
            'thumbnail' => 'max: 100|mimes: jpg, jpeg, png|dimensions: min_width=400, min_height=300',
        ]);

        $project = Project::find($id);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/project/thumbnail/' . $filename);
            Image::make($image)->resize(400, 300)->save($location);
            $project->thumbnail = $filename;
        }

        $project->name = $request->name;
        $project->order = $request->order;
        $project->highlight = $request->highlight;
        $project->link = $request->link;
        $project->description = $request->description;
        $project->company = $request->company;

        $project->save();

        // ProjectImage::where('project_id', $id)->delete();

        // if ($request->hasFile('images')) {
        //     foreach($request->images as $key => $item) {
        //         $project_image = new ProjectImage();
        //         $image = $item;
        //         $filename = $key . time() . '.' . $image->getClientOriginalExtension();
        //         $location = public_path('img/project/images/' . $filename);
        //         Image::make($image)->resize(800, 370)->save($location);
        //         $project_image->project_id = $project->id;
        //         $project_image->image = $filename;
        //         $project_image->order = $key + 1;
        //         $project_image->save();
        //     }
        // }

        Session::flash('success', "Project has been updated.");

        return redirect()->route('projects.edit', $id);
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

    public function viewImages($id) {
        $project = Project::find($id);
        return view('admin.projects.images', ['project' => $project, 'viewers' => $this->getViewers()]);
    }

    public function storeImage(Request $request, $id) {
        $this->validate($request, [
            'image' => 'required|max: 100|mimes: jpg, jpeg, png',
        ]);

        if ($request->hasFile('image')) {
            $project_image = new ProjectImage();
            $image = $request->image;
            $key = ProjectImage::where('project_id', $id)->orderByDesc('order')->first();

            $filename = $key->order + 1 . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/project/images/' . $filename);
            Image::make($image)->resize(800, 370)->save($location);
            $project_image->project_id = $id;
            $project_image->image = $filename;
            $project_image->order = $key->order + 1;
            $project_image->save();
        }

        Session::flash('success', "Image has been uploaded.");
        return redirect()->route('projects.images', $id);
    }

}
