@extends('layouts.default')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('admin.others.gallery.add')}}">
            @csrf
            <div class="row card p-5">
                <div class="bg-light p-5 rounded">
                    <h2>Gallery</h2>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Title</label>
                        @if(isset($gallery->title))
                            <input type="text" hidden="" name="id" value="{{$gallery->id}}"class="form-control">
                            <input type="text" name="title" value="{{$gallery->title}}" class="form-control" placeholder="Title">
                        @else
                         <input type="text" name="title" value="" class="form-control" placeholder="Title">
                        @endif
                    </div>
                     <div class="form-group">
                        <label>Description</label>
                         @if(isset($gallery->description))
                           <textarea id="myTextarea" name="description" value="{{$gallery->description}}" style="width: 100%;">{{$gallery->description}}</textarea>
                        @else
                         <textarea id="myTextarea" name="description" style="width: 100%;"></textarea>
                        @endif
                        
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div>
            </div> 
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.0/tinymce.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.0/skins/content/dark/content.min.css" rel="stylesheet">
    <script>
        tinymce.init({
            selector: '#myTextarea',
            plugins: 'advlist autolink lists link image imagetools media table paste',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image media table',
            menubar: false,
          });
    </script>


@endsection