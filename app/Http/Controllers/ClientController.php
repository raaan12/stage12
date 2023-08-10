<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;

use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('client.clothes', compact('clothes'));
    } 
    
    public function accessories()
    {
        $accessories = Product::where('categoryId', 2)->get();// to get the product with accessories category
        return view('client.accessories', compact('accessories'));
    } 


    public function contact()
    {
        return view('client.contact');
    } 

    public function about()
    {
        return view('client.aboutus');
    } 


}