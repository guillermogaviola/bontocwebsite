@extends('layouts.frontend')

@section('content')



<div class="container">

<br>
<br>

@if(isset($directory->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$directory->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $directory->description !!}
        </div>
    @endif
  
</div>
@endsection