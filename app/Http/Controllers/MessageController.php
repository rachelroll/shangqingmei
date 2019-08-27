<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Agent;

class MessageController extends Controller
{
    // 留言存储
    public function store(Request $request)
    {
        $content = $request->content;
        $username = $request->username;
        $device = Agent::device();
        $ip = $request->getClientIp();

        var_dump(geoip());die;
        $city = geoip()->getLocation('27.974.399.65');
        dd($city);

        Message::create([
            'content' => $content,
            'username' => $username,
            //'from' => $request->from,
            'device' => $request->device
        ]);

        return back()->with('success','操作成功');
    }
}
