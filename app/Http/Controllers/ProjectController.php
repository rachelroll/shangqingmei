<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = $this->projects;
        return view('project.index', compact('projects'));
    }

    public function list($id)
    {
        $projects = $this->projects;

        $lists = ProjectCategory::where('project_id', $id)->with('projects')->get();

        if (Agent::isDesktop()) {
            return view('project.list', compact('lists', 'projects'));
        } else {
            return view('project.list-m', compact('lists', 'projects'));
        }
    }

    public function show($id)
    {
        $projects = $this->projects;

        $project = Project::find($id);
        $cat_id = $project->project_category_id;
        $lists = ProjectCategory::where('project_id', $cat_id)->with('projects')->get();
        return view('project.show', compact('project', 'lists', 'projects'));
    }

    // 搜索
    public function search(Request $request)
    {
        $s = $request->s;
        $projects = Project::where('title', 'like', '%'. $s .'%')->get();

        return view('project.search', compact('projects', 's'));
    }
}
