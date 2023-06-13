<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view ('home');
    }
  
    public function room (){
        return view ('room');
    }
    public function service (){
        return view ('service');
    }
    public function contact (){
        return view ('contact');
    }
    public function about (){
        return view ('about');
    }
  
}
