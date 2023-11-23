@extends('layouts.frontend')

@section('content')





<div class="container">

<br>
<br>

@if(isset($missionandvision->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$missionandvision->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $missionandvision->description !!}
        </div>
    @endif
</div>
@endsection