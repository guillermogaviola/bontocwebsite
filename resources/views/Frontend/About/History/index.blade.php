@extends('layouts.frontend')

@section('content')


<div class="container">

    <br>
    <br>
    @if(isset($history->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$history->title}}</span>
        </h1>
        <br>
        <br>
    	<div class="siteorigin-widget-tinymce textwidget">
            {!! $history->description !!}
        </div>
    @endif
</div>
@endsection