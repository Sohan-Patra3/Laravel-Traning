<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view("display");
    }

    public function abouts($name){
        $data = compact('name');
        return view("abouts")->with($data);
    }
}
