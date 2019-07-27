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
                <div class="card-header">Company Show</div>
                <div class="card-body">
        <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" disabled value="{{ $company->name }}" name="name" placeholder="Name">
         
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" disabled value="{{ $company->email }}" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Logo</label>
                <div class="card">
                    <img src="{{ asset('storage/'.$company->logo) }}" alt="">
                </div>
              </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Website</label>
                    <input type="text" value="{{ $company->website }}" disabled class="form-control" name="website">
               
                  </div>
                  <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
