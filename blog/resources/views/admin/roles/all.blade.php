@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody> 
         @foreach ($roles as $role)
            <tr> 
             
                <td></td>
                <td>{{$role->name}}</td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="d-flex">
                                <a class="btn btn-info" href="{{route('role.show' , $role->id)}}">Show</a>
                                <a class="btn btn-warning" href="">edit</a>
                                {{--Start delete button --}}
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                {{--end delete button --}}
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('role.create')}}">Add Role</a>


@endsection
