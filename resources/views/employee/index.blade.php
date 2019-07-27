@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee</div>
                @if(Session::has('success'))
                <div class="alert alert-success success" style="text-align: center;" role="success">
                    <strong>{{ Session::get('success') }}</strong>
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-errors success" style="text-align: center;" role="success">
                    <strong>{{ Session::get('error') }}</strong>
                </div>
                @endif
                <div class="card-body">
                        <a href="{{ route('employee:create') }}" class="btn btn-primary" style="float:right;margin: 10px;">Create</a>
                        <br/>
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($employees as $employee)
                                  <tr>
                                      <th scope="row">{{ $employee->id }}</th>
                                      <td>{{ $employee->first_name }}</td>
                                      <td>{{ $employee->last_name }}</td>
                                      <td>{{ $employee->email }}</td>
                                      <td>{{ $employee->phone }}</td>
                                      <td>{{ $employee->company->name }}</td>
                                      <td class="b-group"><a href="{{ route('employee:edit', ['employee'=>$employee]) }}" class="btn btn-primary space">Edit</a><a href="{{ route('employee:show', ['employee'=>$employee]) }}" class="btn btn-primary">Show</a><a href="{{ route('employee:destroy', ['employee'=>$employee]) }}" class="btn btn-primary">Delete</a></td>
                                    </tr>
                                  @endforeach
                                 
                                </tbody>
                              </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
