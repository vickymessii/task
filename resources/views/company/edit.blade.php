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
                <div class="card-header">Company Update</div>
                <div class="card-body">
        <form action="{{ route('company:update', $company) }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" value="{{ $company->name }}" name="name" placeholder="Name">
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" value="{{ $company->email }}" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror  
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Logo</label>
                <div class="card">
                    <img src="{{ asset('storage/'.$company->logo) }}" alt="">
                </div>
                <input type="file" class="form-control" name="logo">
                @error('logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
              </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Website</label>
                    <input type="text" value="{{ $company->website }}" class="form-control" name="website">
                    @error('website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
