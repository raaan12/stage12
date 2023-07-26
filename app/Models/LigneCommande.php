<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;
    protected $fillable = [
        'commandeId',
        'productId',
        'quantity',
    ];
     // Define the inverse relationships
     public function product()
     {
         return $this->belongsTo(Product::class);
     }
 
     public function order()
     {
         return $this->belongsTo(OCommanderder::class);
     }
}
