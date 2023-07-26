<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commande = Commande::orderBy('created_at', 'DESC')->get();
        return view('commandes.index', compact('commande'));
    }
    public function create()
    {
        return view('client.confirmation');
    }

    public function store(Request $request)
    {
        // // Validate the form data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'address' => 'required|string|max:500',
        //     // Add more validation rules for other fields as needed
        // ]);

        // // Store the commande details in the database
        // $commande = new Commande();                                                        
        // $commande->name = $request->name;
        // $commande->email = $request->email;
        // $commande->address = $request->address;
        // // Add more fields as needed
        // $commande->save();

        // // You can also associate the commande with the products in the shopping cart here

        // // After saving the commande details, you can redirect the user to the payment page or a confirmation page
        // return redirect()->route('payment')->with('success', 'commande placed successfully! Please proceed with payment.');
    }
}
