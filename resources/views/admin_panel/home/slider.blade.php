@extends('admin_panel.admin_layouts.master')

@section('content')

<div class="container-fluid px-4">
    <h1 class='mt-4'> Slider Manager</h1>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  add slide
</button>
@if (session('success'))

<div class='alert alert-success alert-dismissible fade show' role='alert'>
  {{session('success')}}
</div>s
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form method = "POST" action= "/saveslider" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

            <!-- Top headiing -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Top Heading</label>
                <input type="text" class="form-control" id="Top_headiing" name="top_heading" placeholder="Enter Top heading">
                
            </div>
            <!-- End Top headiing -->

            <!-- image upload -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image Upload</label>
                <input type="file" class="form-control" id="image_upload" name="image">
                
            </div>
            <!-- End image upload -->

            <!-- Explore more -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Top Heading</label>
                <input type="url" class="form-control" id="Explore_more" name="Explore_more_link" placeholder="Enter Explore more link" >
            <!-- End Explore more -->


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>

            </div>
        </form>
    </div>
  </div>
</div>
<!--End Modal -->
@endsection