<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function unverified(){
        $arr['categories'] = Admin::all();
        return view('admin.categories.unverified')->with($arr);
    }

    public function admin_all(){
        $arr['categories'] = Admin::all();
        return view('admin.categories.all')->with($arr);
    }

    public function admin_cafe(){

    }
}
