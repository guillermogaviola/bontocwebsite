@extends('layouts.default')

@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('admin.newsandupdates.news.list') }}" class="btn bg-success text-white" style="float: right;">Back to List</a>
              <h5 class="card-title">Edit News</h5>
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-12">
                  <label class="form-label">Title *</label>
                  <input type="text" class="form-control" name="title" value="" required>
                  </div>

                <div class="col-12">
                  <label class="form-label">Image </label>
                    <input type="file" class="form-control" name="image_file" required>
                        <!-- <img src="" style="height: 100px; width: 100px;"> -->
                </div>

                <div class="col-12">
                  <label class="form-label">Description *</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="col-md-2" style="margin-bottom: 10px;">
                  <label class="form-label text-black">Date Posted</label>
                  <input type="date" name="date_posted" value="" class="form-control">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                  <label for="inputPassword4" class="form-label">Status *</label>
                  <select class="form-control" name="status">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                  <button type="submit" class="btn btn-success text-white">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection