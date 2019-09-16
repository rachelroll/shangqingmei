<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // 列表页
    public function index()
    {
        $projects = $this->projects;

        return view('service.index', compact('projects'));
    }

    // 详情页
    public function show($id)
    {
        $projects = $this->projects;

        switch ($id) {
            case 1:
                return view('service.show1', compact('projects'));
                break;
            case 2:
                return view('service.show2', compact('projects'));
                break;
            case 3:
                return view('service.show3', compact('projects'));
                break;
            default:
                return view('service.show1', compact('projects'));
        }

    }
}
