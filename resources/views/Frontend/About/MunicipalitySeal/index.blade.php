@extends('layouts.frontend')

@section('content')





<div class="container">

<br>
<br>

@if(isset($municipalityseal->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$municipalityseal->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $municipalityseal->description !!}
        </div>
    @endif
</div>
@endsection