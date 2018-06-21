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
            'secret' => '730e2436918458c90be350931bc8e0a2',
            'token'  =>'springlee',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
        $app = Factory::officialAccount($config);
        $app->server->push(function ($message){

            return '你好';
        });
        $response = $app->server->serve();
        return $response;

    }


}
