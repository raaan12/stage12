@extends('client.layouts.main')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        @php $total += $details['price'] * $details['quantity'] @endphp
        <tr data-id="{{ $id }}">
            <td data-th="Product">
                <div class="row">
                    <img src="{{ asset('storage/' . $details['photo']) }}" style="max-height: 200px; max-width: 200px;">

                    </div>
                </div>
            </td>
            <td data-th="Price">dt{{ $details['price'] }}</td>
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
            </td>
            <td data-th="Subtotal" class="text-center">dt{{ $details['price'] * $details['quantity'] }}</td>
            <td class="actions" data-th="">
                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <h3><strong>Total dt{{ $total }}</strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ route('client.index')}}"class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <p class="btn btn-primary"><a href="{{route('client.confirmation')}}" class="btn btn-primary btn-block text-center" role="button">validate order</a> </p>
                </td>
        </tr>
    </tfoot>
</table>
@endsection






