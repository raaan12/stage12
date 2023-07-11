@extends('layouts.main')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List sizes</h1>
        <a href="{{ route('sizes.create') }}" type="button" class="btn btn-secondary">Add new size</a>

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
                <th>Update/Delete</th>

            </tr>
        </thead>
        <tbody>
            @if($size->count() > 0)
                @foreach($size as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('sizes.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>       
                                
                                <form action="{{ route('sizes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete size number {{ $rs->id }} ?')">
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
