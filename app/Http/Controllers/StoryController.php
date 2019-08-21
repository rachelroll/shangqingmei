<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function index()
    {
        return view('story.index');
    }

    public function list(Request $request)
    {
        $cat = $request->type;

        $lists = Story::where('category', $cat)->get();

        return view('story.list', compact('lists'));
    }

    public function show($id)
    {
        $story = Story::find($id);
        $category = $story->category;
        $lists = Story::where('category', $category)->get();
        $nav = [];
        foreach ($lists as $item) {
            $sub_cats = Story::where('sub_category', $item->sub_category)->pluck('client_name');
            foreach ($sub_cats as $sub) {
                $nav[$item->sub_category][] = $sub;
            }
        }


        return view('story.show', compact('story', 'nav'));
    }
}





