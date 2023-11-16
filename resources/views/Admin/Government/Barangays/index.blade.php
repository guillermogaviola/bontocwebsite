@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row card p-5">
            <div class="bg-light p-5 rounded">
                <h2>Barangays</h2>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                 <div class="form-group">
                    <label>Description</label>
                    <textarea id="myTextarea" name="description" style="width: 100%;"></textarea>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>
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