<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Product;
use App\Models\LigneCommande;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // Récupérez les données du formulaire de livraison
    $formData = $request->only(['name', 'email', 'address', 'phone_number']);

    // Récupérez le montant total depuis la variable $total du panier
    $total = 100; // Assurez-vous d'avoir cette variable disponible ici

    // Créez une nouvelle commande et définissez les champs appropriés
    $commande = new Commande();
    $commande->montant = $total;
    $commande->dateLivraison = date('Y-m-d'); // Mettez la date de livraison appropriée
    $commande->etat = 'en cours de traitement'; // Mettez l'état approprié
    $commande->clientId = Auth::user()->id; // Utilisez l'ID du client actuellement connecté

    // Enregistrez la commande dans la base de données
    $commande->save();
    session()->forget('cart');

    // Ajoutez les produits de la commande dans la relation Many-to-Many
    if (session('cart')) {
        foreach (session('cart') as $id => $details) {
            $product = Product::find($id);
            if ($product) {
                // Créez une nouvelle ligne de commande et définissez les champs appropriés
                $ligneCommande = new LigneCommande();
                $ligneCommande->commandeId = $commande->id;
                $ligneCommande->productId = $product->id;
                $ligneCommande->quantity = $details['quantity'];

                // Enregistrez la ligne de commande dans la base de données
                $ligneCommande->save();
            }
        }
    }
    return redirect()->route('client.index');
}
}