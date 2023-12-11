@extends('layouts.default')

@section('content')
    <div class="container">
      <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                 <div class="card-body">
                    <h5 class="card-title">Add New News</h5><br>
                      <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="" value="" autocomplete="off">
                            <div class="form-group">
                              <label class="text-black">Title</label>
                            @if(isset($news->title))
                        <input type="text" hidden="" name="id" class="form-control">
                      <input type="text" name="title" class="form-control" placeholder="Title">
                  @else
                     <input type="text" name="title" value="" class="form-control" placeholder="">
                  @endif
              </div><br>
              <div class="col-12">
              <label class="form-label text-black">Image</label>
                <input type="file" class="form-control" name="image_file">
            </div><br>
            <div class="form-group">
                <label class="text-black">Description</label>
                 @if(isset($news->description))
                   <textarea id="myTextarea" name="description"  style="width: 100%;"></textarea>
                @else
                 <textarea id="myTextarea" name="description" style="width: 100%;"></textarea>
                @endif
            </div><br>
            <div class="col-12">
                  <label for="inputPassword4" class="form-label text-black">Is Featured? *</label>
                  <select class="form-control" name="status">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="col-md-2" style="margin-bottom: 10px;">
                  <label class="form-label text-black">Date Posted</label>
                  <input type="date" name="dateposted" value="" class="form-control">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                   <button type="submit" class="btn btn-success">Submit</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section><br><br>



 <form method="POST" action="{{route('admin.newsandupdates.upcomingupdates.add')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <h5 class="card-title">
                News
                <a href="" class="btn btn-success" style="float: right; margin-top: 5px;">Add News</a>
              </h5><br><br>
              <table class="table table-light">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Is Featured</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">5</th>
                    <td>
                    <img src="" style="height: 100px; width: 100px;">
                    </td>
                    <td>fanny</td>
                    <td>Which currency do you want?</td>
                    <td>Yes</td>
                    <td>31-10-2023 06:08 AM</td>
                    <td>
                      <a href="" class="btn btn-success btn-sm">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete records?');" href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>
                    <img src="" style="height: 100px; width: 100px;">  
                    </td>
                    <td>fanny</td>
                    <td>Yiu want?</td>
                    <td>No</td>
                    <td>31-10-2023 06:08 AM</td>
                    <td>
                      <a href="" class="btn btn-success btn-sm">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete records?');" href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>
                    <img src="" style="height: 100px; width: 100px;">
                    </td>
                    <td>fanny</td>
                    <td>what you do?</td>
                    <td>Yes</td>
                    <td>31-10-2023 06:05 AM</td>
                    <td>
                      <a href="" class="btn btn-success btn-sm">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete records?');" href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>
                    <img src="" style="height: 100px; width: 100px;">
                    </td>
                    <td>fanny</td>
                    <td>Which currency do you want?</td>
                    <td>Yes</td>
                    <td>31-10-2023 06:05 AM</td>
                    <td>
                      <a href="" class="btn btn-success btn-sm">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete records?');" href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                    <img src="" style="height: 100px; width: 100px;">
                    </td>
                    <td>fanny</td>
                    <td>tgbrtg?</td>
                    <td>Yes</td>
                    <td>31-10-2023 06:04 AM</td>
                    <td>
                      <a href="" class="btn btn-success btn-sm">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete records?');" href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  </tbody>
              </table><br><br>
              </form>



            <!-- <div class="row card p-5">
                <div class="bg-light p-5 rounded">
                    <h2>Upcoming Updates</h2>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="text-black">Title</label>
                        @if(isset($upcomingupdates->title))
                            <input type="text" hidden="" name="id" class="form-control">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        @else
                         <input type="text" name="title" value="" class="form-control" placeholder="Title">
                        @endif
                    </div>
                     <div class="form-group">
                        <label class="text-black">Description</label>
                         @if(isset($upcomingupdates->description))
                           <textarea id="myTextarea" name="description"  style="width: 100%;"></textarea>
                        @else
                         <textarea id="myTextarea" name="description" style="width: 100%;"></textarea>
                        @endif
                        
                    </div>
                    <div class="form-group">
                        <label class="text-black">Featured Image</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div>
                    <br>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div>
            </div> --> 

@endsection