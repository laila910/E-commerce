<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table ='carts';
    protected $fillable= ['product_id',
    'quantity',
    'price',
    'sale_price',
    'user_id',
    'created_at',
    'updated_at'];
    /**
     * Relationship with products.
     */
    public function Product(){
        return $this->hasMany(Product::class,'id','product_id');
    }
}
