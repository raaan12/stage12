@extends('client.layouts.main')
@section('content')
<h1>Clothes</h1>

<div class="row">
    @foreach ($clothes as $clothe)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $clothe->photo) }}" class="card-img-top" alt="{{ $clothe->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $clothe->name }}</h5>
                    <p class="card-text">{{ $clothe->description }}</p>
                    <p class="card-text">Price: {{ $clothe->price }} dt</p>
                    <p class="card-text">Quantity: {{ $clothe->quantity }}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection