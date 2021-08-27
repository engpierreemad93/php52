@extends('layouts.admin')
@section('title') add user @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add user</h4>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('user.store')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control" name="name">
                  @error('name')
                      <div class="text-danger"> 
                          {{$message}}
                      </div>   
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Email address</label>
                  <input type="email" class="form-control" name="email">
                  @error('email')
                      <div class="text-danger"> 
                          {{$message}}
                      </div>   
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')
                      <div class="text-danger"> 
                          {{$message}}
                      </div>   
                  @enderror
                  </div>
                </div>
              </div>
            <button type="submit" class="btn btn-primary pull-right">Submit Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection