@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Employee</div>
                <div class="card-body">
                        <form action="{{ route('employee:update', ['employee'=>$employee]) }}" method="POST">
                          @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Company</label>
                               <select name="company_id" class="form-control">
                                 <option value="">Select Company</option>
                                 @foreach ($companies as $item)
                                  <option value="{{ $item->id }}" {{$item->id== $employee->company_id ? 'selected':''}}>{{ $item->name }}</option>  
                                 @endforeach
                               </select>
                               @error('company_id')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                              @enderror
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>
                                  <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                                  @error('first_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                 @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Last Name</label>
                                  <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
                                  @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                 @enderror
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" value="{{ $employee->email }}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                      </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
