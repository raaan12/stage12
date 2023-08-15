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
        'categoryId' => ['required', 'exists:categories,id'],
        'photo' => ['nullable', 'image', 'max:2048'],
    ]);
    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->categoryId = $request->categoryId;
   
    if ($request->hasFile('photo')) {
        $imagePath = $request->file('photo')->store('product_images', 'public');
        $product->photo = $imagePath;
    }
    $product->save();
    return redirect()->route('products.index')->with('success', 'Product created successfully');
}
public function update(Request $request, string $id)
{
    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
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
        return view('products.editProduct', compact('product', 'categories', 'sizes', 'colors'));
    }
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products.index')->with('success', 'product deleted successfully');    }



    public function cart()
    {
        $cart = session('cart', []);
        $products = Product::with(['size', 'color'])->whereIn('id', array_keys($cart))->get();

        return view('client.cart', compact('cart', 'products'));
    }



    public function addToCart($id, Request $request) {
        $cart = session('cart', []);
        $product = Product::with(['size', 'color'])->findOrFail($id); // Eager load size and color relationships
        
        $selectedSizeId = $request->input('size_id');
        $selectedColorId = $request->input('color_id');
        
        // Retrieve the quantity from the pivot table based on selected size and color
        $selectedSize = $product->size->find($selectedSizeId);
        $selectedColor = $product->color->find($selectedColorId);
        dd($selectedSize, $selectedColor);

        if ($selectedSize && $selectedColor) {
            $quantity = min($selectedSize->pivot->quantity, $selectedColor->pivot->quantity);
            
            // Check if the product already exists in the cart
            if (array_key_exists($id, $cart)) {
                // If it exists, update the quantity
                $cart[$id]['quantity'] += $quantity;
            } else {
                // If it doesn't exist, add a new entry
                $cart[$id] = [
                    'price' => $product->price,
                    'quantity' => $quantity,
                    "name" => $product->name,
                    "photo" => $product->photo,
                    "size" => $selectedSize->name,
                    "color" => $selectedColor->name,
                ];
            }
    
            session(['cart' => $cart]);
        }
    
        return redirect()->back(); // Redirect back to the same page
    }
    
    
    
    // public function addToCart($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $cart = session()->get('cart', []);
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     }  else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "photo" => $product->photo,
    //             "price" => $product->price,
    //             "size" =>$product->size_id,
    //             "color" => $product->color_id,
    //         ];
    //     }
 
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product add to cart successfully!');
    // }
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