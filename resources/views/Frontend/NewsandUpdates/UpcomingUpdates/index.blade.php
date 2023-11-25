@extends('layouts.frontend')

@section('content')

<div class="container">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <br>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Upcoming</span>Updates</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-4 mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <img src="/{{ $value->image }}" width="350px" height="200px">
                </div>
                <div class="col-lg-12">
                    <a href="#"><h5></h5></a>
                </div>
                <div class="col-lg-12">
                    <a href="#"><h5></h5></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection