@extends('layouts.layout')
@section('content')
<section class="site-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <h1>Input your place data</h1>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">

        <form action="{{ route('Unverifiedd.admin_unverifiedd.store')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="nama">Nama Tempat</label>
                    <input type="text" name="nama" id="nama" class="form-control ">
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label for="kategori">Kategori</label>
                        <select id="kategori" name="kategori" class="form-control">
                            <option selected>Tempat Wisata</option>
                            <option>Tempat Tinggal Sementara</option>
                            <option>Cafe</option>
                            <option>Restaurant</option>
                            <option>Mall</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="8"></textarea>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-5 form-group">
                    <label for="jam_buka">Jam Buka</label>
                    <select id="jam_buka" name="jam_buka" class="form-control">
                            <option>0 AM</option>
                            <option>1 AM</option>
                            <option>2 AM</option>
                            <option>3 AM</option>
                            <option>4 AM</option>
                            <option>5 AM</option>
                            <option>6 AM</option>
                            <option selected>7 AM</option>
                            <option>8 AM</option>
                            <option>9 AM</option>
                            <option>10 AM</option>
                            <option>11 AM</option>
                            <option>0 PM</option>
                            <option>1 PM</option>
                            <option>2 PM</option>
                            <option>3 PM</option>
                            <option>4 PM</option>
                            <option>5 PM</option>
                            <option>6 PM</option>
                            <option>7 PM</option>
                            <option>8 PM</option>
                            <option>9 PM</option>
                            <option>10 PM</option>
                            <option>11 PM</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 form-group">
                    <label for="jama_tutup">Jam Tutup</label>
                    <select id="jama_tutup" name="jama_tutup" class="form-control">
                            <option>0 AM</option>
                            <option>1 AM</option>
                            <option>2 AM</option>
                            <option>3 AM</option>
                            <option>4 AM</option>
                            <option>5 AM</option>
                            <option>6 AM</option>
                            <option selected>7 AM</option>
                            <option>8 AM</option>
                            <option>9 AM</option>
                            <option>10 AM</option>
                            <option>11 AM</option>
                            <option>0 PM</option>
                            <option>1 PM</option>
                            <option>2 PM</option>
                            <option>3 PM</option>
                            <option>4 PM</option>
                            <option>5 PM</option>
                            <option>6 PM</option>
                            <option>7 PM</option>
                            <option>8 PM</option>
                            <option>9 PM</option>
                            <option>10 PM</option>
                            <option>11 PM</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="deskripsi">Image</label>
                      <br>
                      <input type="file" name="image">
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control " cols="30" rows="8"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>
                </div>
              </form>


        </div>


@endsection
