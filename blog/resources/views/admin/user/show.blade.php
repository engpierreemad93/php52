@extends('layouts.admin')
@section('title') Show user @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Show User</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" value="{{$user->name}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <input type="email" class="form-control" value="{{$user->email}}">
                </div>
              </div>
            </div>
            <a class="btn btn-info pull-right" href="{{route('user.index')}}">back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection