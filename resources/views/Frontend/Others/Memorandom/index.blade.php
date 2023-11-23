@extends('layouts.frontend')

@section('content')



<div class="container"><br><br>

    <@if(isset($memorandom->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$memorandom->title}}</span>
        </h1><br><br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $memorandom->description !!}
        </div>
    @endif
  
</div>
@endsection