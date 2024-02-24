<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form (){
      return view('form');
    }

    public function register(Request $request)
    {
        // $request->validate(
        // [
        //     'name' => 'required',
        //     'mobile' => 'required',
        //     'gmail' => 'required',
        //     'password' => 'required',
        // ]
        // );
      echo "<pre>";
      print_r($request->all());
    }
}
