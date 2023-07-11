@extends('layouts.main')
@section('content')
   <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Employees</h1>
        <a href="" type="button" class="btn btn-secondary">Add new admin</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Phone number</th>
                <th>Adress</th>
                <th>Password</th>
                <th>Update/Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($employe->count() > 0)
                @foreach($employe as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>  
                        <td class="align-middle">{{ $rs->role }}</td>
                        <td class="align-middle">{{ $rs->phone_number }}</td>
                        <td class="align-middle">{{ $rs->adress }}</td>
                        <td class="align-middle">{{ $rs->Password }}</td>

                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                             
                             
                            <form action="{{ route('profile.edit', $rs->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                                
                                <form action="{{ route('profile.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete user number {{ $rs->id }} ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">empty table</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection