@extends('layouts.frontend')

@section('content')


<div class="container">

<br>
<br>

@if(isset($mayorsoffice))
    <h1 style="text-align: center;">
        <span style="color: #046631;">{{$mayorsoffice->title}}</span>
    </h1><br><br>
    <div class="siteorigin-widget-tinymce textwidget">
        {!! $mayorsoffice->description !!}
    </div>
@endif
  
</div>
@endsection