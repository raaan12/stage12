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
        'sizeId',
        'colorId',
        'photo',

    ];
    // Define the one-to-many relationship with orders

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function size()
    {
        return $this->belongsTo(Size::class,'sizeId' );
    }

    public function color()
    {
        return $this->belongsTo(Color::class,'colorId');
    }
    // Define the many-to-many relationship with orders
    public function commande()
    {
        return $this->belongsToMany(Order::class, 'ligneCommande')->withPivot('quantity');
    }
}
