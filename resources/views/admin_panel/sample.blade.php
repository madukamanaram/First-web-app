<div class="container-fluid px-4">
    <h1 class='mt-4'> Slider Manager</h1>
</div>


<!-- error message display -->
<div>
@if (session('success'))

<div class='alert alert-success alert-dismissible fade show' role='alert'>
  {{session('success')}}
</div>s
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all()as $errors)
        <li>{{$error}}</li>
      @endforeach
</div>