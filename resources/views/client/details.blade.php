<style>
    .container {
        margin-top: 5%;
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
        <h1 class="mb-0">Detail Product</h1>
        <hr />
        <div class="col mb-3">
            @if ($product->photo)
            <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" style="max-height: 200px; max-width: 200px;">
            @else
            No Image
            @endif
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="categoryId" class="form-control" placeholder="categoryId" value="{{ $product->categoryId ? $product->category->name : 'N/A'  }}" readonly>
            </div>
            <div class="col mb-3">
                @if ($product->size->isNotEmpty())
                @foreach ($product->size as $size)
                @php
                $quantity = $size->pivot->quantity;
                $color_id = $product->color->where('id', $size->pivot->color_id)->first()->pivot->color_id;
                $color = \App\Models\Color::find($color_id);

                @endphp
                Size: {{ $size->name }} - Quantity: {{ $quantity }} - Color: {{ $color ? $color->name : 'N/A' }}<br>
                @endforeach
                @else
                N/A
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
            </div>
        </div>
        <a href="{{ route('client.clothes')}}" type="button" class="btn btn-warning">return</a>

    </div>
</div>