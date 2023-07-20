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
<h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="col">
                <select name="categoryId" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="quantity" class="form-control" placeholder="quantity">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="description"></textarea>
            </div>
        </div>
        <div class="row mb-3">
                <div class="col">
                    <input type="file" name="photo" class="form-control">
                </div>
            </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">save</button>
                <a href="{{ route('colors.index')}}" type="button" class="btn btn-warning">cancel</a>       
            </div>
        </div>
    </form>
        </div>
</div>

@endsection