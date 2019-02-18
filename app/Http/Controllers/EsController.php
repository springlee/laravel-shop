<?php

namespace App\Http\Controllers;

class EsController extends Controller
{
    //

    public function customDict()
    {
        $hotWords = [
            '爱他美',
            '韩天峰',
            '鸟哥',
            '王者荣耀'


        ];

        $s = implode("\r\n",$hotWords);


//        return response($s)
//            ->header('Last-Modified', gmdate('D, d M Y H:i:s', time()) . ' GMT')
//            ->header('ETag', '5816f349-19');
    }
}
