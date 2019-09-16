<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // 首页
    public function home()
    {
        $projects = $this->projects;
        return view('index', compact('projects'));
    }

    // 关于我们
    public function index()
    {
        $projects = $this->projects;
        return view('about/about', compact('projects'));
    }
}
