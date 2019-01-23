<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Image;
use File;

class ProjectController extends Controller
{
    public function createProject()
    {
        $project = Project::first();
        return view('admin.project.createProject', compact('project'));
    }

    public function storeProject(Request $request)
    {
        $project = new Project();
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(1200, 999999) . '.' . $extension;
                $large_image_path = 'public/adminpanel/uploads/project/' . $filename;
                Image::make($image_tmp)->save($large_image_path);
                $project->image = $filename;
            }
            $project->date = $data['date'];
            $project->title = ucwords($data['title']);
            $project->description = ucwords(strtolower($data['description']));
            $project->slug = str_slug($data['title']);
            $project->save();
            Session::flash('success', 'Project Created Successfully');
            return redirect()->route('viewProjects');
        }
    }

    public function viewProjects()
    {
        $projects = Project::latest()->get();
        return view('admin.project.viewProjects', compact('projects'));
    }

    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.editProject', compact('project'));
    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(1200, 999999) . '.' . $extension;
                $large_image_path = 'public/adminpanel/uploads/project/' . $filename;
                Image::make($image_tmp)->save($large_image_path);
                $project->image = $filename;
            }
            $project->date = $data['date'];
            $project->title = ucwords($data['title']);
            $project->description = ucwords(strtolower($data['description']));
            $project->slug = str_slug($data['title']);
            $project->save();
            Session::flash('success', 'Project Updated Successfully');
            return redirect()->route('viewProjects');
        }
    }

    public function deleteProject($id){
        $project = Project::findOrFail($id);
        $project->delete();
        Session::flash('danger','Project Deleted Successfully');
        return redirect()->route('viewProjects');
    }
}
