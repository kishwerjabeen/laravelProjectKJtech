<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

}
