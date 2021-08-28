@extends('layouts.admin')
@section('content') 
<table class="table">
    <thead>
        <tr>
            <th>profile pic</th>
            <th>username</th>
            <th>email</th>
            <th>created at</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><img src="" style="height: 10vh"></th>
            <th></th>
            <td></td>
            <td></td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-warning" href="">edit</a>
                   {{--Start delete button --}}
                    <form method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    {{--end delete button --}}
                </div>
            </td>
        </tr>

    </tbody>
</table>
@endsection