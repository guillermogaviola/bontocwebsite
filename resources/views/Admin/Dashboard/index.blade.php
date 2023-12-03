@extends('layouts.default')

@section('content')
    <div class="container">
        <form>
            <div class="row card">
                <div class="bg-light p-5 rounded">
                    <h2 style="text-align: center;">Administrator | Dashboard</h2>
                </div>
            </div> 
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.0/tinymce.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.0/skins/content/dark/content.min.css" rel="stylesheet">
    <script>
        tinymce.init({
            selector: '#myTextarea',
            plugins: 'advlist autolink lists link image code imagetools media table paste',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image code media table',
            menubar: false,
          });
    </script>
@endsection