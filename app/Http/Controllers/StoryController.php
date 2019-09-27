<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

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

        $story->background = str_replace('<p>&nbsp; &nbsp; &nbsp; &nbsp; ', '<p>', $story->background);
        $story->background = str_replace('<p>　　', '<p>', $story->background);

        $lists = Story::all()->groupBy('category');
        $nav = [];
        foreach ($lists as $cat => $categories) {
            foreach($categories as $key => $item) {
                $nav[$cat][] = $item;
            }
        }

        if (Agent::isDesktop()) {
            return view('story.show', compact('story', 'nav', 'projects'));
        } else {
            return view('story.show-m', compact('story', 'nav', 'projects'));
        }
    }
}





