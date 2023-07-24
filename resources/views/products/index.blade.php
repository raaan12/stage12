@extends('layouts.main')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Products</h1>
        <a href="{{ route('products.create') }}" type="button" class="btn btn-secondary">Add new Product</a>

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
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Photo</th>
                <th>Update/Delete</th>

            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->category->name }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->quantity }}</td>
                        <td class="align-middle"> 
                            @if ($rs->photo)
                                <img src="{{ asset('storage/' . $rs->photo) }}" alt="{{'no picture'}}" style="max-height: 100px; max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.details', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>       
                                
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete product number {{ $rs->id }} ?')">
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