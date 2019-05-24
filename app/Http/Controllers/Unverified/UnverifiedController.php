<?php

namespace App\Http\Controllers\Unverified;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unverified_Place;
use Illuminate\Support\Facades\View;
class UnverifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Unverified_Place $unverified_Place)
    {
        if($request->image->getClientOriginalName())
        {
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1, 999999).'.'.$ext;
            $request->image->storeAs('public/Unverified_Place', $file);
        } else {
            $file = '';
        }
        $unverified_Place->image = $file;
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
    public function edit($id)
    {
        //
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
        //
    }
}
