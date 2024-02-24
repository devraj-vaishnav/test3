<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function DataShow(){
     return view('datashow');
    }
    public function datainput($a,$b){
        echo "<h1> First Number--". $a ."</h1>";
        echo "<h1>Second Number--". $b ."</h1>";
        echo "<h1> Total--". $a+$b ."</h1>";
        // return view('datashow');
        // echo $a+$b;
    }
    public function UserDetail(){
        return view('userdetail');
    }
}
