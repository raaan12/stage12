<!-- resources/views/order/create.blade.php -->

@extends('client.layouts.main')

@section('content')
<div class="container">
    <h2>Checkout</h2>
    <form method="POST" action="{{ route('store_order') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
</div>
@endsection
