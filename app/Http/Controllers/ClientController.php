<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.index');

    }
    public function clothes()
    {
        $clothes = Product::all();
        return view('client.clothes',compact('clothes'));
    } 
    
    public function accessories()
    {
        $accessories = Product::all();
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