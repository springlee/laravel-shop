<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;

class WxController extends Controller
{
    //

    public function message()
    {
        $config = [
            'app_id' => 'wxda0c59636f633af7',
            'secret' => 'd3b33e959b76c2070a5354020e28e2a5',
            'token'  => 'springlee',
            'aes_key'=>'dlW1VzVQZvHwUrvNEeEioCHBPayAkGCobsnvzGAGjUr',
            'response_type' => 'array',
        ];

        $app = Factory::miniProgram($config);

        $app->server->push(function ($message)use ($app){
            $arr = [
                'touser'=>$message['FromUserName'] ,
                'msgtype'=>'link',
                'link'=>[
//                    'content'=>'你好!!<a href="http://www.qq.com">点击跳小程序</a>'
                       'title'=>'Happy Day',
                       'description'=>'Is Really A Happy Day',
                       'url'=>'http://www.qq.com',
                       'thumb_url'=>'https://wx.qlogo.cn/mmhead/Q3auHgzwzM6icWj9gTSv017ZiaQE0rGTjhichMxlOQaia9gibqM1AaqsWXA/0'
                ]
            ];
            $app->customer_service->send($arr);
        });
        $response = $app->server->serve();
        return $response;
    }


    public function oauth_callback(){

        $config = [
            'app_id' => 'wx264849d75610eab1',
            'secret' => 'c0b4de891e03326a326c557681ec45be',
        ];
        $app = Factory::officialAccount($config);
        $oauth = $app->oauth;
        $user = $oauth->user();

        var_dump($user);

    }

    public function profile(){

        $config = [
            'app_id' => 'wx264849d75610eab1',
            'secret' => 'c0b4de891e03326a326c557681ec45be',
            'oauth' => [
                'scopes'   => ['snsapi_userinfo'],
                'callback' => '/oauth_callback',
            ],
        ];
        $app = Factory::officialAccount($config);
        $oauth = $app->oauth;
        return $oauth->redirect();
    }


}
