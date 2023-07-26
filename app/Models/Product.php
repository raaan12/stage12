<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'categoryId',
        'photo',

        ];
        // Define the one-to-many relationship with orders

        public function category()
        {
            return $this->belongsTo(Category::class, 'categoryId');
        }

        // Define the many-to-many relationship with orders
    public function commande()
    {
        return $this->belongsToMany(Order::class, 'ligneCommande')->withPivot('quantity');
    }
    
}
