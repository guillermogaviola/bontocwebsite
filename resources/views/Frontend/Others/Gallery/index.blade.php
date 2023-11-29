@extends('layouts.frontend')

@section('content')



	<h1 class="mt-5" style="color: green; font-family: Helvetica; text-align: center;">Gallery</h1><br><br>

<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{ asset('resources/img/slsubcorientation/FB_IMG_1694922419558.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
    />

    <img
      src="{{ asset('resources/img/slsubcorientation/FB_IMG_1694922421542.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{ asset('resources/img/slsubcorientation/FB_IMG_1694922427988.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
    />

    <img
      src="{{ asset('resources/img/slsubcorientation/FB_IMG_1694922431449.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{ asset('resources/img/slsubcorientation/FB_IMG_1694922433605.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
    />

    <img
      src="{{ asset('resources/img/slsubcorientation/FB_IMG_1694922435694.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
    />
  </div>
</div>

    <!-- @if(isset($gallery->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$gallery->title}}</span>
        </h1><br><br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $gallery->description !!}
        </div>
    @endif -->
  

@endsection