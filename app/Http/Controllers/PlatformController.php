<?php

namespace App\Http\Controllers;

use App\BrandConsult;
use App\Message;
use App\Opinion;
use App\Platform;
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
        $messages = Message::orderby('id', 'DESC')->get();

        return view('platform.brand_consult', compact('messages'));
    }

    // 品牌问题存储
    public function consultStore(Request $request)
    {
        BrandConsult::create([
            'name' => $request->input('name', '匿名'),
            'email' => $request->input('email', ''),
            'company' => $request->input('company', ''),
            'mark' => $request->input('mark', ''),
            'reason' => $request->input('reason', ''),
            'time' => $request->input('time', ''),
            'problem' => json_encode($request->input('problems', '')),
            'type' => json_encode($request->input('type', '')),
            'service' => $request->input('service', ''),
        ]);

        return back()->with('success', '提交成功');
    }

    public function VisualClinicStore(Request $request)
    {
        try {
            Platform::create([
                'company' => $request->input('company'),
                'industry' => $request->input('industry'),
                'linian' => $request->input('linian'),
                'brands' => $request->input('brands'),
                'opinion' => $request->input('opinion'),
                'range' => $request->input('range'),
                'famous' => $request->input('famous'),
                'comments' => $request->input('comments'),
                'name' => $request->input('name'),
                'from_company' => $request->input('from_company'),
                'email' => $request->input('email'),
            ]);

            return back()->with('success', '提交成功');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function visualClinic()
    {
        $messages = Message::orderby('id', 'DESC')->get();
        return view('platform.visual_clinic', compact('messages'));
    }

    public function linian()
    {
        $messages = Message::orderby('id', 'DESC')->get();
        return view('platform.linian', compact('messages'));
    }

    // 形象更新案例
    public function updateCase()
    {
        $messages = Message::orderby('id', 'DESC')->get();
        return view('platform.update_case', compact('messages'));
    }

    // 形象过渡案例
    public function transformCase()
    {
        $messages = Message::orderby('id', 'DESC')->get();
        return view('platform.transform_case', compact('messages'));
    }


    // 视野观点
    public function opinion()
    {
        $messages = Message::orderby('id', 'DESC')->get();
        $files = Opinion::all();
        $ci_files = $brand_files = $sales_files = [];
        foreach ($files as $key=>$item) {
            if ($item->type == 0) {
                $ci_files[$key]['title'] = $item->title;
                $ci_files[$key]['file'] = $item->file;
            } elseif ($item->type == 1) {
                $brand_files[$key]['title'] = $item->title;
                $brand_files[$key]['file'] = $item->file;
            } else {
                $sales_files[$key]['title'] = $item->title;
                $sales_files[$key]['file'] = $item->file;
            }
        }

        return view('platform.opinion', compact('messages', 'ci_files', 'brand_files', 'sales_files'));
    }



}
