<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Agent;
use mysql_xdevapi\Exception;

class MessageController extends Controller
{
    // 留言存储
    public function store(Request $request)
    {
        $content = $request->content;
        $username = $request->username;
        $device = Agent::device();
        $ip = $request->getClientIp();

        try {
            $from = $this->taobaoIP($ip);

            $avatar_arr = [
                'https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/Avatar_boy_54x54.png',
                'https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/Avatar_girl_2_54x54.png',
                'https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/Avatar_girl_54x54.png',
                'https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/Avatar_man_2_54x54.png',
                'https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/Avatar_man_3_54x54.png',
                'https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/Avatar_man_54x54.png'
            ];
            $avatar = $avatar_arr[ rand(0, 5) ];

            Message::create([
                'content' => $content,
                'username' => $username,
                'from' => $from,
                'device' => $device,
                'avatar' => $avatar
            ]);

            return back()->with('success','操作成功');
        } catch (Exception $e) {
            return back()->with('error','$e');
        }
    }

    public function taobaoIP($clientIP){
        $taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$clientIP;
        $IPinfo = json_decode(file_get_contents($taobaoIP));
        $province = $IPinfo->data->region;
        $city = $IPinfo->data->city;
        $data = $province.$city;
        return $data;
    }
}


