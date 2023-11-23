@extends('layouts.frontend')

@section('content')





<div class="container">

<br>
<br>

@if(isset($servicepledge->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$servicepledge->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $servicepledge->description !!}
        </div>
    @endif
</div>
@endsection