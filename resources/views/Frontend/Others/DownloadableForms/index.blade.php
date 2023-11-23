@extends('layouts.frontend')

@section('content')





<div class="container"><br><br>

    @if(isset($downloadableforms->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$downloadableforms->title}}</span>
        </h1><br><br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $downloadableforms->description !!}
        </div>
    @endif
</div>
@endsection