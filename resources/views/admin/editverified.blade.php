@extends('layouts.adminZ')
@section('content')
<div class="content-wrapper">
        <div class="content">
                <div class="row">
                    <div class="col-12">
                            <div class="card card-table-border-none" id="recent-orders">
                                    <div class="card-header justify-content-between">
                                        <h1 class="mb-1">Edit <br> Verified Place(s)</h1>
                                        <div>
                                                <span></span>
                                              </div>
                                            </div>
                                            <hr class="w-100">
                                            <div class="card-body pt-0 pb-5">
                                                    <form action="{{ route('admin_update')}}" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <h3>Place Information</h3>
                                                        <br><br>
                                                        <div class="row">
                                                            <input type="hidden" name="id" value="{{ $verified_Place -> id }}" class="form-control">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Nama Tempat</label>
                                                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $verified_Place -> nama }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Kategori</label>
                                                                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $verified_Place -> kategori }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Alamat</label>
                                                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $verified_Place -> alamat }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Jam Buka</label>
                                                                <input type="text" name="jam_buka" id="jam_buka" class="form-control" value="{{ $verified_Place -> jam_buka }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Jam Tutup</label>
                                                                <input type="text" name="jama_tutup" id="jama_tutup" class="form-control" value="{{ $verified_Place -> jama_tutup }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Image</label><br>
                                                                <input type="file" name="image">
                                                                <br><br>
                                                                @if ($verified_Place->image)
                                                                <img src="{{asset('storage/Unverified_Place/'.$verified_Place -> image)}}" style="width:700px;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Deskripsi</label>
                                                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $verified_Place -> deskripsi }}">
                                                            </div>
                                                        </div>

                                                        <input type="submit" value="Save Changes" class="btn btn-success">
                                                        <a href="javascript:void(0)" onclick="goBack()" class="btn btn-danger">Back</a>
                                                    </form>

                                                    <script>function goBack() {
                                                        window.history.back();
                                                      }</script>

                                            </div>
                            </div>
                    </div>
                </div>
        </div>
</div>

@endsection
