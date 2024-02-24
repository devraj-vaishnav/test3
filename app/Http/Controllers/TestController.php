<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
        echo "hello";
    }

    public function userAdd($first, $second)
    {
        echo $first + $second;
    }

    public function userList(){
        return view('user-list');
    }

    public function userAddPage(){
        return view('user-add');
    }
}
