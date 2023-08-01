<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'quantity',
    ];
     // Define the inverse relationships
     public function product()
     {
         return $this->belongsToMany(Product::class)->withPivot('product_id','quantity');
     }

}
