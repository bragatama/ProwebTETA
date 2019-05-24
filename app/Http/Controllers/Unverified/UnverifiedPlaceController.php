<?php

namespace App\Http\Controllers\Unverified;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unverified_Place;
use Illuminate\Support\Facades\View;

class UnverifiedPlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['categories'] = Unverified_Place::all();
        return view('admin.categories.unverified')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.registerplace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Unverified_Place $unverified_Place)
    {
        $unverified_Place->nama = $request->nama;
        $unverified_Place->kategori = $request->kategori;
        $unverified_Place->alamat = $request->alamat;
        $unverified_Place->jam_buka = $request->jam_buka;
        $unverified_Place->jama_tutup = $request->jama_tutup;
        $unverified_Place->deskripsi = $request->deskripsi;
        $unverified_Place->save();
        return redirect('main');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unverified_Place)
    {
        $arr['unverified_Place'] = Unverified_Place::find($unverified_Place);
        return view('admin.edit')->with($arr);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unverified_Place::destroy($id);
        return redirect('admin_unverified');
    }
}
