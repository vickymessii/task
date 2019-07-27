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
                               <select name="company_id" class="form-control" disabled>
                                 <option value="">Select Company</option>
                                 @foreach ($companies as $item)
                                  <option value="{{ $item->id }}" {{$item->id== $employee->company_id ? 'selected':''}}>{{ $item->name }}</option>  
                                 @endforeach
                               </select>
                              
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>
                                  <input type="text" name="first_name"  disabled value="{{ $employee->first_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                              
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Last Name</label>
                                  <input type="text" name="last_name" disabled value="{{ $employee->last_name }}" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
                                 
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" disabled value="{{ $employee->email }}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                     
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="text" disabled name="phone" value="{{ $employee->phone }}" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                                      
                                      </div>
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
