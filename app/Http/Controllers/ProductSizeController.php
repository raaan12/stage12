<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required', 'string', 'max:255'],
            'color_id' => ['required', 'numeric'],
            'size_id' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
        ]);
    
        $product = Product::findOrFail($request->product_id);
        $product->size()->attach($request->size_id, ['color_id' => $request->color_id, 'quantity' => $request->quantity]);
    
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }
    

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $sizes = Size::all();
        $colors = Color::all();
        return view('products.edit', compact('product', 'categories', 'sizes', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $product = ProductSize::findOrFail($id);
        $product->product_id = $request->product_id;
        $product->color_id = $request->color_id;
        $product->size_id = $request->size_id;
        $product->quantity = $request->quantity;

        // Save the updated product
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
}
