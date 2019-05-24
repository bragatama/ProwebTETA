@extends('layouts.layout')
@section('content')
<section class="site-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <h2 class="mb-4">Category: Tempat Wisata</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row mb-5 mt-5">

            <div class="col-md-12">

                @foreach ($tempat as $t)



                <div class="post-entry-horzontal">
                <a href="{{ route('isi.isi.edit', $t->id)}}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('storage/Unverified_Place/'.$t -> image)}});"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="category">{{ $t->nama}}</span>
                        <span class="mb-4">{{ $t->kategori}} </span> &bullet;
                        <span class="ml-2">{{ $t->jam_buka}} &mdash; {{ $t->jama_tutup}}</span>
                      </div>
                      <h2>{{ $t->deskripsi}}</h2>
                    </span>
                  </a>
                </div>

                <!-- END post -->
                @endforeach

            </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-center">

          </div>
        </div>



      </div>


@endsection
