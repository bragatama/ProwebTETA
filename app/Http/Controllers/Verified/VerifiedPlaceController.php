<?php

namespace App\Http\Controllers\Verified;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Place;
use Illuminate\Support\Facades\DB;

class VerifiedPlaceController extends Controller
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
        $arr['verified_Place'] = Place::all();
        return view('admin.categories.all')->with($arr);
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
    public function store(Request $request, Place $verifiedPlace)
    {

        $verifiedPlace->image = $request->image;
        $verifiedPlace->nama = $request->nama;
        $verifiedPlace->kategori = $request->kategori;
        $verifiedPlace->alamat = $request->alamat;
        $verifiedPlace->jam_buka = $request->jam_buka;
        $verifiedPlace->jama_tutup = $request->jama_tutup;
        $verifiedPlace->deskripsi = $request->deskripsi;
        $verifiedPlace->save();
        return redirect('admin_all');
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
    public function edit($verifiedPlace)
    {
        $arr['verified_Place'] = Place::find($verifiedPlace);
        return view('admin.editverified')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $verifiedPlace)
    {
        if(isset($request->image) && $request->image->getClientOriginalName())
        {
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1, 999999).'.'.$ext;
            $request->image->storeAs('public/Unverified_Place', $file);
        } else {
            if(!$verifiedPlace->image){
                $file = '';
            } else {
                $file = $verifiedPlace->image;
            }
        }

        DB::table('places')->where('id', $request->id)->update([
            'nama' => $verifiedPlace->nama = $request->nama,
            'kategori' => $verifiedPlace->kategori = $request->kategori,
            'alamat' => $verifiedPlace->alamat = $request->alamat,
            'jam_buka' => $verifiedPlace->jam_buka = $request->jam_buka,
            'jama_tutup' => $verifiedPlace->jama_tutup = $request->jama_tutup,
            'deskripsi' => $verifiedPlace->deskripsi = $request->deskripsi,
            'image' => $verifiedPlace->image = $file
        ]);

        //$verifiedPlace->image = $file;
        //$verifiedPlace->nama = $request->nama;
        //$verifiedPlace->kategori = $request->kategori;
        //$verifiedPlace->alamat = $request->alamat;
        //$verifiedPlace->jam_buka = $request->jam_buka;
        //$verifiedPlace->jama_tutup = $request->jama_tutup;
        //$verifiedPlace->deskripsi = $request->deskripsi;
        //$verifiedPlace->save();
        return redirect()->route('Verified.admin_all.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::destroy($id);
        return redirect('admin_all');
    }

    public function select_tempatwisata(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Tempat Wisata')->get();
        return view('admin.categories.tempatwisata')->with($tempat);
    }
    public function select_tempattinggalsementara(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Tempat Tinggal Sementara')->get();
        return view('admin.categories.tempattinggalsementara')->with($tempat);
    }
    public function select_cafe(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Cafe')->get();
        return view('admin.categories.cafe')->with($tempat);
    }
    public function select_restaurant(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Restaurant')->get();
        return view('admin.categories.restaurant')->with($tempat);
    }
    public function select_mall(){
        $tempat['tempat'] = DB::table('places')->where('kategori', 'Mall')->get();
        return view('admin.categories.mall')->with($tempat);
    }
    public function isi($verifiedPlace){
        $arr['verified_Place'] = Place::find($verifiedPlace);
        return view('main.isi')->with($arr);
    }
    public function recent(){
        $users = DB::table('places')->paginate(5);
        return view('layouts.layout', ['places' => $users]);
    }

    public function buat(){
        return view('admin.create');
    }

    public function barubaru(Request $request, Place $verifiedPlace){
        if($request->image->getClientOriginalName())
        {
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1, 999999).'.'.$ext;
            $request->image->storeAs('public/Unverified_Place', $file);
        } else {
            $file = '';
        }
        $verifiedPlace->image = $file;
        $verifiedPlace->nama = $request->nama;
        $verifiedPlace->kategori = $request->kategori;
        $verifiedPlace->alamat = $request->alamat;
        $verifiedPlace->jam_buka = $request->jam_buka;
        $verifiedPlace->jama_tutup = $request->jama_tutup;
        $verifiedPlace->deskripsi = $request->deskripsi;
        $verifiedPlace->save();
        return redirect()->route('Verified.admin_all.index');
    }
}
