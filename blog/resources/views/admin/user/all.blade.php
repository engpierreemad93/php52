@extends('layouts.admin')
@section('title') users @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Simple Table</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>created_at</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td></td>
                                <td>{{$user->name }}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            {{-- {{url('admin/user/'.$user->id)}} --}}
                                            <a class="btn btn-info" href="{{route('user.show' , $user->id)}} ">show</a>
                                            <a class="btn btn-warning"
                                                href="{{route('user.edit' , $user->id)}}">Edit</a>
                                            {{-- <a class="btn btn-danger" href="">Delete</a> --}}
                                            <form method="post" action="{{ route('user.destroy' , $user->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{route('user.create')}}">add user</a>
            </div>
        </div>
    </div>
</div>
@endsection
