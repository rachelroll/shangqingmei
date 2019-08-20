<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // 列表页
    public function index()
    {
        return view('service.index');
    }

    // 详情页
    public function show($id)
    {
        switch ($id) {
            case 1:
                return view('service.show1');
                break;
            case 2:
                return view('service.show2');
                break;
            case 3:
                return view('service.show3');
                break;
            default:
                return view('service.show1');
        }

    }
}
