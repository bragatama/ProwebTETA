<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Place;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $tempat1['tempat1'] = DB::table('places')->paginate(5);
        return view('main')->with($tempat1);

    }

    public function register_place(){
        return view('main.registerplace');
    }
    public function contact(){
        return view('contact');
    }

    //category tempat

    public function category_tempat_wisata(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Tempat Wisata')->get();
        return view('main.categories.category_tempat_wisata')->with($tempat);
    }

    public function category_tempat_tinggal_sementara(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Tempat Tinggal Sementara')->get();
        return view('main.categories.category_tempat_tinggal_sementara')->with($tempat);
    }

    public function category_cafe(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Cafe')->get();
        return view('main.categories.category_cafe')->with($tempat);
    }

    public function category_restaurant(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Restaurant')->get();
        return view('main.categories.category_restaurant')->with($tempat);
    }

    public function category_mall(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Mall')->get();
        return view('main.categories.category_mall')->with($tempat);
    }
}
