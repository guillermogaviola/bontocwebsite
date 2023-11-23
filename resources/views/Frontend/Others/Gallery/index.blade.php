@extends('layouts.frontend')

@section('content')



<div class="container"><br><br>

    @if(isset($gallery->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$gallery->title}}</span>
        </h1><br><br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $gallery->description !!}
        </div>
    @endif
  
</div>
@endsection