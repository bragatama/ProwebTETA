@extends('layouts.adminZ')
@section('content')
<div class="content-wrapper">
    <div class="content">
            <div class="row">
                <div class="col-12">
                        <div class="card card-table-border-none" id="recent-orders">
                                <div class="card-header justify-content-between">
                                    <h1 class="mb-1">Verified Place(s): Cafe</h1>
                                    <div>
                                            <span></span>
                                          </div>
                                        </div>

                                        <div class="card-body pt-0 pb-5">
                                                <a href="{{asset('admin_create')}}" class="btn btn-info">Tambah Tempat baru</a>
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
                                                @foreach ($tempat as $c)
                                                <tr>
                                                        <td>{{ $c->id }}</td>
                                                        <td>{{ $c->nama }}</td>
                                                        <td>{{ $c->kategori }}</td>
                                                        <td>{{ $c->alamat }}</td>
                                                        <td>{{ $c->jam_buka }}</td>
                                                        <td>{{ $c->jama_tutup }}</td>
                                                        <td><a href="{{ route('Verified.admin_all.edit', $c->id) }}" class="btn btn-info">Edit</a>   <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                                                            <form action="{{ route('Verified.admin_all.destroy', $c->id)}}" method="POST">
                                                                @method('DELETE')
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            </form>
                                                        </td>

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
