<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;

use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{

    public function customize(string $id)
    {
        return view('client.details', compact('product'));
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

    public function addToCart(Request $request, $id)
    {
        // Use $id as the accessory ID
        // Logic to add the product to the cart

        return response()->json(['message' => 'Product added to cart successfully']);
    }

}