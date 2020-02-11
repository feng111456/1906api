<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function testRedis(){
        $key = "1906redis";
        $val = 'testRedis11111';
        Redis::set($key,$val);
        $test=Redis::get($key);
        echo $test;
    }
}
