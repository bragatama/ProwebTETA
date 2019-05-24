@extends('layouts.layout')
@section('content')
<section class="site-section pt-5">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme home-slider">
                @foreach ($tempat1 as $i)
            <div>
              <a href="{{ route('isi.isi.edit', $i->id)}}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{asset('storage/Unverified_Place/'.$i -> image)}}'); ">
                <div class="text half-to-full">
                  <div class="post-meta">
                    <span class="category">{{$i->kategori}}</span>
                    <span class="mr-2">{{$i->alamat}}</span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h3>{{$i->nama}}</h3>
                  <p>{{$i->deskripsi}}</p>
                </div>
              </a>
            </div>
                @endforeach
          </div>
        </div>
      </div>
    </div>


  </section>
  <!-- END section -->

  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Welcome</h2>
          <p>TeTa atau Tempat Bercerita merupakan Website yang menyediakan daftar tempat di Balikpapan, deskripsi serta informasi lainnya mengenai tempat tersebut dengan jelas secara real time atau up to date</p>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row">
              <br><br><br><br><br><br><br>
              <br><br><br><br><br><br><br>
          </div>

          <div class="row">
            <div class="col-md-12 text-center">
              <nav aria-label="Page navigation" class="text-center">
              </nav>
            </div>
          </div>




        </div>

@endsection
