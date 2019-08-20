<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return view('project.index');
    }

    public function list($id)
    {
        $lists = ProjectCategory::where('project_id', $id)->with('projects')->get();

        return view('project.list', compact('lists'));
    }

    public function show($id)
    {
        $project = Project::find($id);
        $cat_id = $project->project_category_id;
        $lists = ProjectCategory::where('project_id', $cat_id)->with('projects')->get();
        //dd($project->images);
        return view('project.show', compact('project', 'lists'));
    }
}
