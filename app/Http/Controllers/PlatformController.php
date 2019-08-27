<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    // 互动平台首页
    public function index()
    {
        return view('platform.index');
    }

    // 品牌问题咨询
    public function brandConsult()
    {
        $messages = Message::all();
        return view('platform.brand_consult', compact('messages'));
    }

    // 品牌问题存储
    public function consultStore(Request $request)
    {
        dd(77);
        dd($request);
    }

    public function visualClinic()
    {
        return view('platform.visual_clinic');
    }

    public function linian()
    {
        return view('platform.linian');
    }

    // 形象更新案例
    public function updateCase()
    {
        return view('platform.update_case');
    }

    // 形象过渡案例
    public function transformCase()
    {
        return view('platform.transform_case');
    }




}
