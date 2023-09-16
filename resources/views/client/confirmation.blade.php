@extends('client.layouts.main')
@section('content')
<style>
    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: chocolate;
        background-color: #FFEED6;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #FFE5C1;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Formulaire d'adresse de livraison -->
            <h2>Customer Address</h2>
            <form method="POST" action="{{ route('store_order') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" placeholder="address" value="{{ Auth::user()->address }}">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone:</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="phone_number" value="{{ Auth::user()->phone_number }}">
                </div>
                <!-- Ajoutez ici les champs pour les frais de livraison -->
                <button type="submit" class="button">Submit Order</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- Récapitulatif du panier -->
            <h2>Cart Summary</h2>
            <!-- Ajoutez ici la liste des articles du panier avec leur nom et prix -->
            <ul>
                @php $total = 0 @endphp
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <li>{{ $details['name'] }} - dt {{ $details['price'] * $details['quantity'] }} </li>
                @endforeach
                @endif
            </ul>
            <hr>
            <h4><strong>Total dt{{ $total }}</strong></h4>
        </div>
    </div>
</div>
@endsection