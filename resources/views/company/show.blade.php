@extends('layouts.app')

@section('content')
<style>
.invalid-feedback {
    display: block !important;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Company Create</div>
                <div class="card-body">
        <form action="{{ route('company:store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Logo</label>
                <input type="file" class="form-control" name="logo">
               
              </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Website</label>
                    <input type="text" class="form-control" name="website">
                   
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
