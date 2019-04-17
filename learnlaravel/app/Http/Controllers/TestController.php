<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('index/index',['data'=>'这是视图文件','array'=>array(1,2,3,4)]);

    }

    public function get(Request $request)
    {
        $name = $request->input('id');
        print_r($name);
    }
}
