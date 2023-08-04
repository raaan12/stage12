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
        <h1 class="mb-0">Edit product</h1>
        <hr />
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <h4>Edit product stock</h4>
        <form action="{{ route('productsStock.store', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">product_id</label>
                    <input type="text" name="product_id" class="form-control" placeholder="name" value="{{ $product->id }}" readonly>
                </div>


            </div>

            <div class="row">
                <div class="col">
                    <div id="sizeColorContainer">
                        <div class="size-color-input mb-3">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Size</label>
                                    <select name="size_id" class="form-control">
                                        <option value="">Select size</option>
                                        @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Color</label>
                                    <select name="color_id" class="form-control">
                                        <option value="">Select color</option>
                                        @foreach ($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <input type="text" name="quantity" class="form-control" placeholder="quantity" value="{{ $product->quantity }}">
                                </div>

                                <!-- hidden field-->
                                <!-- <div class="row" id="hiddenFields" style="display: none;">
                                    <div class="col">
                                        <label class="form-label">Color</label>
                                        <select name="color_id" class="form-control">
                                            <option value="">Select color</option>
                                            @foreach ($colors as $color)
                                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Quantity</label>
                                        <input type="text" name="quantity" class="form-control" placeholder="quantity" value="{{ $product->quantity }}">
                                    </div>
                                </div> -->
                                <!-- hidden field-->
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" type="button" id="showHiddenFieldsButton" class="btn btn-warning" style="height: 35px; margin: 20px">Add new color</a> -->

                </div>
            </div>
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-primary">Done</button>
                    <a href="{{ route('products.index')}}" type="button" class="btn btn-warning">cancel</a>

                </div>
            </div>
        </form>
    </div>
</div>







</div>
</div>
@endsection