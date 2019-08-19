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
}
