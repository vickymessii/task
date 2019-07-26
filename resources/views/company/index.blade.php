@extends('layouts.app')

@section('content')
<style>
td.b-group {
    display: grid;
    grid-template-columns: 33% 33% 33%;
    grid-gap: 8px;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Company</div>
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
                    <a href="{{ route('company:create') }}" class="btn btn-primary" style="float:right;margin: 10px;">Create</a>
                    <br/>
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($companies as $company)
                                  <tr>
                                      <th scope="row">{{ $company->id }}</th>
                                      <td>{{ $company->name }}</td>
                                      <td>{{ $company->email }}</td>
                                      <td> <img src="{{ asset('storage/'.$company->logo) }}" alt="" style="width: 100px; height: 100px;"></td>
                                      <td>{{ $company->website }}</td>
                                      <td class="b-group"><a href="" class="btn btn-primary space">Edit</a><a href="" class="btn btn-primary">Show</a><a href="" class="btn btn-primary">Delete</a></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                        
                              </table>
                              {{$companies->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
