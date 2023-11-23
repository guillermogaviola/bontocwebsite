@extends('layouts.default')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('admin.careers.jobvacancies.add')}}" enctype="multipart/form-data">
            @csrf
            <div class="row card p-5">
                <div class="bg-light p-5 rounded">
                    <h2>Dashboard</h2>
                </div>
                <!-- <div class="col-sm-12">
                    <div class="form-group">
                        @if(isset($jobvacancies->title))
                            <input type="text" hidden="" name="id" class="form-control">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        @else
                         <input type="text" name="title" value="" class="form-control" placeholder="Title">
                        @endif
                    </div>
                     <div class="form-group">
                        <label class="text-black">Description</label>
                         @if(isset($jobvacancies->description))
                           <textarea id="myTextarea" name="description"  style="width: 100%;"></textarea>
                        @else
                         <textarea id="myTextarea" name="description" style="width: 100%;"></textarea>
                        @endif
                    </div>
                    <div>
                    <br>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div> -->
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


    <!-- REVISED -->
    <!-- <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5-stable/tinymce.min.js"></script> -->
   <!--  <script>
        tinymce.init({
  selector: 'textarea',
  plugins: 'image code',
  toolbar: 'undo redo | image code',
  
  // without images_upload_url set, Upload tab won't show up
  images_upload_url: 'postAcceptor.php',
  
  // we override default upload handler to simulate successful upload
  images_upload_handler: function (blobInfo, success, failure) {
    setTimeout(function() {
      // no matter what you upload, we will turn it into TinyMCE logo :)
      success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
    }, 2000);
  },
  
  init_instance_callback: function (ed) {
    ed.execCommand('mceImage');
  }
});
    </script> -->


@endsection