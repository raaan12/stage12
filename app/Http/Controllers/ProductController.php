<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
        $categories = Category::all(); // Fetch all categories
        return view('products.index', compact('product', 'categories'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));    
        }

    /**
     * Store a newly created resource in storage.
     */


public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'price' => ['required', 'numeric'],
        'quantity' => ['required', 'integer'],
        'categoryId' => ['required', 'exists:categories,id'],
        'photo' => ['nullable', 'image', 'max:2048'], // Max file size: 2 MB (you can adjust it as needed)

    ]);

    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->categoryId = $request->categoryId;
    if ($request->hasFile('photo')) {
        $imagePath = $request->file('photo')->store('product_images', 'public');
        $product->photo = $imagePath;
    }
    $product->save();
    return redirect()->route('products.index')->with('success', 'Product created successfully');
}

  

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $product = Product::findOrFail($id);
            $categories = Category::all(); // Fetch all categories
        
            return view('products.edit', compact('product', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, string $id)
     {
        $product = Product::findOrFail($id);
   
        $product->update($request->all());
   
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products.index')->with('success', 'product deleted successfully');    }
}
