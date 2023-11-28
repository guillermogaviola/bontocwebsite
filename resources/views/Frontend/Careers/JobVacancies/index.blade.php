@extends('layouts.frontend')

@section('content')



<div class="container"><br><br>
	
@if(isset($jobvacancies->title))
        <h1 style="text-align: center;">
            <span style="color: #046631;">{{$jobvacancies->title}}</span>
        </h1><br><br>
        <div class="siteorigin-widget-tinymce textwidget">
            {!! $jobvacancies->description !!}
        </div>
    @endif
  
</div>
@endsection