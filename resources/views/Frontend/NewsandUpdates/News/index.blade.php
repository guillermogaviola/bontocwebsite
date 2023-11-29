@extends('layouts.frontend')

@section('content')

@extends('layouts.frontend')

@section('content')

<style>
    h1{
        text-align: center;
        color: #046631;
        font-family: Helvetica; 
    }
</style>

<div class="container">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block"><br>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-danger">Ne</span>ws</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 mb-4">
                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395316821_303000189163725_2409139856403516309_n.jpg') }}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 14px;">
                                <a href="">Title</a>
                                <span class="px-1">/</span>
                                <a href=""><span>Date Posted</span></a> 
                            </div>
                        <a href="">description</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395319120_303000175830393_641487911243486377_n.jpg') }}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 14px;">
                                <a href="">Title</a>
                                <span class="px-1">/</span>
                                <a href=""><span>Date Posted</span></a> 
                            </div>
                        <a href="">description</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395324091_302999379163806_7386524974371784414_n.jpg') }}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 14px;">
                                <a href="">Title</a>
                                <span class="px-1">/</span>
                                <a href=""><span>Date Posted</span></a> 
                            </div>
                        <a href="">description</a>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>

@endsection