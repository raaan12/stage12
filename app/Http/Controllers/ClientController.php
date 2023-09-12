<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\User;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{

    public function customize(string $id)
    {
        $product = Product::findOrFail($id); // Replace 'Product' with your model name
        return view('client.details', compact('product'));

    }

    public function profile()
    {
        $user = Auth::user();
        return view('client.profile', compact('user'));
    }



    public function index(){
        $clothes = Product::where('categoryId', 1)->get();
        $accessories = Product::where('categoryId', 2)->get(); // to get the product with accessories category
        $sizes = Size::all();
        $colors = Color::all();

        return view('client.index', compact('clothes', 'accessories', 'colors', 'sizes'));

    }
    public function clothes()
    {
        $clothes = Product::where('categoryId', 1)->get();
        $sizes = Size::all();
        $colors = Color::all();
        return view('client.clothes', compact('clothes', 'colors', 'sizes'));
    } 
    
    public function accessories()
    {
        $accessories = Product::where('categoryId', 2)->get();// to get the product with accessories category
        return view('client.accessories', compact('accessories'));
    } 
    public function message(Request $request)
{
    $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'corps' => ['required', 'string'],
    ]);
    $message = new Message();
    $message->title = $request->title;
    $message->corps = $request->corps;    
    $message->save();
    return redirect()->route('client.index');
    }

    public function contact()
    {
        Mail::to('rania.chakroun@etudiant-enit.utm.tn')->send(new \App\Mail\HelloMail());
        return view('client.contact');
    } 

    public function about()
    {
        return view('client.aboutus');
    } 



    public function seeMore( string $id)
    {
        return view('client.accessories');
    } 

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}