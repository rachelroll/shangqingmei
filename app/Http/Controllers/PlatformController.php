<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatformController extends Controller
{

    public function index()
    {
        return view('platform.index');
    }

    public function brandConsult()
    {
        return view('platform.brand_consult');
    }
}
