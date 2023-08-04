@extends('client.layouts.main')
@section('content')
<br>
<br>
<br>

<h1 style="  font-family: courier; font-size: 70px; font-weight: 600; background-image: linear-gradient(to left, #553c9a, #b393d3);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text; margin-left: 600px;">Clothes</h1>
<div class="row">
    @foreach ($clothes as $clothe)
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="{{ asset('storage/' . $clothe->photo) }}" class="card-img-top" alt="{{ $clothe->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $clothe->name }}</h5>
                <p class="card-text">{{ $clothe->description }}</p>
                <p class="card-text">Price: {{ $clothe->price }} dt</p>
                <p>
                    <i class="fas fa-terminal"></i>
                    <a href="{{ route('product.detail', $clothe->id) }}">Show more</a>
                </p>
                <p class="btn btn-primary"><a href="{{ route('add_to_cart', $clothe->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection