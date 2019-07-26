@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee</div>
                
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
                                      <td class="b-group"><a href="" class="btn btn-primary space">Edit</a><a href="" class="btn btn-primary">Show</a><a href="" class="btn btn-primary">Delete</a></td>
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
