<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
        $categories = Category::all(); // Fetch all categories
        $colors = Color::all(); 
        $sizes = Size::all(); 

        return view('products.index', compact('product', 'categories', 'sizes', 'colors'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('products.create', compact('categories', 'sizes', 'colors'));
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

        $product = Product::findOrFail($id);
        $categories = Category::all(); // Fetch all categories
        $sizes = Size::all();
        $colors = Color::all();
        return view('products.edit', compact('product', 'categories', 'sizes', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->categoryId = $request->categoryId;


        // Handle the image update
        if ($request->hasFile('photo')) {
            // Delete the old image if it exists
            if ($product->photo && Storage::exists('public/' . $product->photo)) {
                Storage::delete('public/' . $product->photo);
            }

            // Save the new image and update the product's photo field
            $imagePath = $request->file('photo')->store('product_images', 'public');
            $product->photo = $imagePath;
        }

        // Save the updated product
        $product->save();
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



    public function cart()
    {
        $product = Product::orderBy('quantity', 'DESC')->get();

        return view('client.cart',compact('product'));
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
    // public function updatecart(Request $request)
    // {
    //     if($request->id && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart successfully updated!');
    //     }
    // }
 
    public function removecart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}