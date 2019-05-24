@extends('layouts.adminZ')
@section('content')
<div class="content-wrapper">
        <div class="content">
                <div class="row">
                    <div class="col-12">
                            <div class="card card-table-border-none" id="recent-orders">
                                    <div class="card-header justify-content-between">
                                        <h1 class="mb-1">Create <br> Verified Place(s)</h1>
                                        <div>
                                                <span></span>
                                              </div>
                                            </div>
                                            <hr class="w-100">
                                            <div class="card-body pt-0 pb-5">
                                                    <form action="{{ route('admin_created')}}" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <h3>Place Information</h3>
                                                        <br><br>
                                                        <div class="row">
                                                            <input type="hidden" name="id" class="form-control">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Nama Tempat</label>
                                                                <input type="text" name="nama" id="nama" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Kategori</label>
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
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Alamat</label>
                                                                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="8"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Jam Buka</label>
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
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Jam Tutup</label>
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
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Image</label><br>
                                                                <input type="file" name="image">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-7 form-group">
                                                                <label for="nama">Deskripsi</label>
                                                                <textarea name="deskripsi" id="deskripsi" class="form-control " cols="30" rows="8"></textarea>
                                                            </div>
                                                        </div>

                                                        <input type="submit" value="Save" class="btn btn-success">
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
