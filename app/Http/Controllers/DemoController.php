<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
  public function home(){
       echo "Home";
  }
  
  public function form(){
      return view('form');
  }
  public function contact(){
      return view('contact');
    //   echo "Mobile-- 987654321<br>" ;
    //   echo "Gmail-- contact@gmail.com";
  }
  public function show($x,$y){
      echo $x + $y;
  }
}
