<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
class CustomerController extends Controller
{
    public function form (){
        return view('form');
    }
    public function store(Request $request){
       print_r($request->all());
       $client = new Customers;
       
      $client ->fname =$request['fname'];
      $client ->lname =$request['lname'];
      $client ->number =$request['number'];
      $client ->gmail =$request['gmail'];
      $client ->address =$request['address'];
      $client ->password = md5($request['password']);
      $client ->save();
    }
}
