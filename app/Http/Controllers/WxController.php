<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;

class WxController extends Controller
{
    //

    public function message()
    {
        file_put_contents('1.txt','1212121');

        $config = [
            'app_id' => 'wx264849d75610eab1',
            'secret' => 'c0b4de891e03326a326c557681ec45be',
            'token'  => 'springlee',
            'response_type' => 'array',
        ];
        $app = Factory::officialAccount($config);
        $app->server->push(function ($message){
            return '你好';
        });
        $response = $app->server->serve();
        return $response;

    }


}
