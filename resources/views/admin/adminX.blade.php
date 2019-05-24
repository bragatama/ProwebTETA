@extends('layouts.adminZ')
@section('content')
<div class="content-wrapper">
    <div class="content">
            <!-- Top Statistics -->
            <div class="row">
              <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                  <div class="card-body">
                    <h1>Welcome <u>{{ Auth::user()->name }}</u></h1>

                    </div>
                  </div>
                </div>
              </div>





  </div>
</div>

@endsection
