@extends('layouts.frontend')

@section('content')


<div class="container">

<br>
<br>

@if(isset($municipalordinances->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$municipalordinances->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $municipalordinances->description !!}
        </div>
    @endif
</div>
@endsection