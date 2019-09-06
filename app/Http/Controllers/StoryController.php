<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function index()
    {
        $projects = $this->projects;
        return view('story.index', compact('projects'));
    }

    public function list(Request $request)
    {
        $projects = $this->projects;

        $cat = $request->type;

        $lists = Story::where('category', $cat)->get();

        return view('story.list', compact('lists', 'projects'));
    }

    public function show($id)
    {
        $projects = $this->projects;
        $story = Story::find($id);
        $lists = Story::all()->groupBy('category');
        $nav = [];
        foreach ($lists as $cat => $categories) {
            foreach($categories as $key => $item) {
                $nav[$cat][] = $item;
            }
        }

        return view('story.show', compact('story', 'nav', 'projects'));
    }
}





