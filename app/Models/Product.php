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
        'categoryId',
        'photo',

    ];
    // Define the one-to-many relationship with orders

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function size()
    {
        return $this->belongsToMany(Size::class,'product_sizes' )->withPivot('size_id', 'quantity', 'color_id');
    }

    public function color()
    {
        return $this->belongsToMany(Color::class, 'product_sizes')->withPivot('color_id');
    }
    // Define the many-to-many relationship with orders
    public function commande()
    {
        return $this->belongsToMany(Order::class, 'ligneCommande')->withPivot('quantity');
    }
}
