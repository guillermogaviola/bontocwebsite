@extends('layouts.frontend')

@section('content')





<div class="container">

<br>
<br>

@if(isset($mandate->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$mandate->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $mandate->description !!}
        </div>
    @endif
</div>
@endsection