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

<br>
<br>

@if(isset($mayorsoffice))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$mayorsoffice->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $mayorsoffice->description !!}
        </div>
@endif
  
</div>
@endsection