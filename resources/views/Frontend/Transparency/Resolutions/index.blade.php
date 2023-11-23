@extends('layouts.frontend')

@section('content')


<div class="container">

<br>
<br>

@if(isset($resolutions->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$resolutions->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $resolutions->description !!}
        </div>
    @endif
</div>
@endsection