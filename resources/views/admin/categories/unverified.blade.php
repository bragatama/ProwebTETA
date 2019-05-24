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
                                        <div class="card-body pt-0 pb-5">
                                          <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Tempat</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Jam Buka</th>
                                                    <th>Jam Tutup</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $c)
                                                <tr>
                                                        <td>{{ $c->id }}</td>
                                                        <td>{{ $c->nama }}</td>
                                                        <td>{{ $c->kategori }}</td>
                                                        <td>{{ $c->alamat }}</td>
                                                        <td>{{ $c->jam_buka }}</td>
                                                        <td>{{ $c->jama_tutup }}</td>
                                                        <td><a href="{{ route('Unverified.admin_unverified.edit', $c->id) }}" class="btn btn-primary">View</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                        </div>
                </div>
            </div>
    </div>

@endsection
