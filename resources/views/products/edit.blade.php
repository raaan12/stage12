@extends('layouts.main')
@section('content')
<style>
    .container {
        margin-top: 10%;
        margin-left: 25%;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-wrapper {
        max-width: 500px;
        padding: 40px;
        background: linear-gradient(#DFD9FF, #FCFFD9);
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .col-form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 0;
    }

    .btn-warning {
        border-radius: 0;
    }
</style>
<div class="container">
        <div class="form-wrapper"> 
<h1 class="mb-0">Edit Product</h1>
    <hr />
    @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}" >
            </div>

            <div class="col">
            <label class="form-label">Category</label>
                <select name="categoryId" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>

        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product quantity</label>
                <input type="text" name="product_quantity" class="form-control" placeholder="Product quantity" value="{{ $product->quantity }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="col mb-3">
                <div class="col">
                    <input type="file" name="photo" class="form-control">
                </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('products.index')}}" type="button" class="btn btn-warning">cancel</a>       

            </div>
        </div>
    </form>

        </div>
</div>
@endsection