@extends('layouts.frontend')

@section('content')




<div class="container">

<br>
<br>
  @if(isset($location->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$location->title}}</span>
        </h1>
        <br>
        <br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $location->description !!}
        </div>
    @endif
</div>
@endsection