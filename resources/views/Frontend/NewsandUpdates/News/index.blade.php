@extends('layouts.frontend')

@section('content')

<!-- Favicon -->
    <link href="{{asset('resources/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('resources/https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap')}}" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="{{asset('resources/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('resources/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('resources/css/style.css')}}" rel="stylesheet">

<div class="container">

    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <br>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Ne</span>ws</h1>
                </a>
            </div>
        </div>
    </div>

<div class="row mb-3">
        <div class="col-lg-4 mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <img src="" width="350px" height="200px">
                </div>
                <div class="col-lg-12">
                     <a href="#">
                    <h5>
                         
                    </h5>
                    </a>
                </div>
                <div class="col-lg-12">
                    <p style="text-align: justify;">
                       
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection