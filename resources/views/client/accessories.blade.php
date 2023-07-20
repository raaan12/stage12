@extends('client.layouts.main')
@section('content')
<br>
<br>
<br>

<h1 style="  font-family: courier; font-size: 70px; font-weight: 600; background-image: linear-gradient(to left, #553c9a, #b393d3);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text; margin-left: 600px;">Accessories</h1>

<div class="row">
    @foreach ($accessories as $accessory)
        <div class="col-md-4">
            <div class="card mb-4">
            <img src="{{ asset('storage/' . $accessory->photo) }}" class="card-img-top" alt="{{ $accessory->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $accessory->name }}</h5>
                    <p class="card-text">{{ $accessory->description }}</p>
                    <p class="card-text">Price: {{ $accessory->price }} dt</p>
                    <p class="card-text">Quantity: {{ $accessory->quantity }}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection