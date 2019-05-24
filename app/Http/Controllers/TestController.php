<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        echo "Hellow Wolds";
    }

    public function about(){
        return view('test');
    }
}
