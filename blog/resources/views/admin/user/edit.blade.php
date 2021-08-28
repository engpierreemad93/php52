@extends('layouts.admin')
@section('title') Edit user @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Edit user</h4>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('user.update' , $user->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="">Username</label>
                  <input type="text" class="form-control" name="name" value="{{$user->name}}">
                  @error('name')
                      <div class="text-danger"> 
                          {{$message}}
                      </div>   
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="">Email address</label>
                  <input type="email" class="form-control" name="email" value="{{$user->email}}">
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
                    <label class="">Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')
                      <div class="text-danger"> 
                          {{$message}}
                      </div>   
                  @enderror
                  </div>
                </div>
              </div>
            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection