@extends('layouts.layout')
@section('content')

<section class="site-section py-lg">
    <div class="container">

      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <h1 class="mb-4">{{ $verified_Place->nama}}</h1>
          <div class="post-meta">
                      <span class="category">{{ $verified_Place->kategori }}</span>
                      <span class="mb-4">Open Hours </span> &bullet;
                       <span class="ml-2">{{ $verified_Place->jam_buka}} &mdash; {{ $verified_Place->jama_tutup}}</span><br>
                       <span class="ml-2">{{ $verified_Place->alamat}}</span>
                    </div>
                    <div class="row mb-5">
                            <div class="col-md-12 mb-4 element-animate">
                              <img src="{{asset('storage/Unverified_Place/'.$verified_Place -> image)}}" alt="Image placeholder" class="img-fluid">
                            </div>
                          </div>
          <div class="post-content-body">
            <p>{{ $verified_Place -> deskripsi }}</p>
          </div>
        <div class="row">
                <div class="col-md-12 text-center">

                </div>
              </div>
        </div>




@endsection
