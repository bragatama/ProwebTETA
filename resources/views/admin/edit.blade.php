@extends('layouts.adminZ')
@section('content')
<div class="content-wrapper">
        <div class="content">
                <div class="row">
                    <div class="col-12">
                            <div class="card card-table-border-none" id="recent-orders">
                                    <div class="card-header justify-content-between">
                                        <h1 class="mb-1">Unverified Place(s)</h1>
                                        <div>
                                                <span></span>
                                              </div>
                                            </div>
                                            <hr class="w-100">
                                            <div class="card-body pt-0 pb-5">
                                                    <form action="{{ route('Verified.admin_all.store')}}" method="post">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <h3>Place Information</h3>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Nama Tempat</label>
                                                                <input type="text" readonly name="nama" id="nama" class="form-control" value="{{ $unverified_Place -> nama }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Kategori</label>
                                                                <input type="text" readonly name="kategori" id="kategori" class="form-control" value="{{ $unverified_Place -> kategori }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Alamat</label>
                                                                <input type="text" readonly name="alamat" id="alamat" class="form-control" value="{{ $unverified_Place -> alamat }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Jam Buka</label>
                                                                <input type="text" readonly name="jam_buka" id="jam_buka" class="form-control" value="{{ $unverified_Place -> jam_buka }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Jam Tutup</label>
                                                                <input type="text" readonly name="jama_tutup" id="jama_tutup" class="form-control" value="{{ $unverified_Place -> jama_tutup }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Image</label><br>
                                                                <span>File name</span>
                                                                <input type="text" readonly name="image" value="{{ $unverified_Place -> image }}" class="form-control">
                                                                <img src="{{asset('storage/Unverified_Place/'.$unverified_Place -> image)}}" style="width:700px;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Deskripsi</label>
                                                                <input type="text" readonly name="deskripsi" id="deskripsi" class="form-control" value="{{ $unverified_Place -> deskripsi }}">
                                                            </div>
                                                        </div>

                                                        <input type="submit" value="Verify" class="btn btn-success">

                                                    </form> <br>
                                                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                                                    <form action="{{ route('Unverified.admin_unverified.destroy', $unverified_Place->id)}}" method="POST">
                                                        @method('DELETE')
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </form>
                                            </div>
                            </div>
                    </div>
                </div>
        </div>
</div>

@endsection
