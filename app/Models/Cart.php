<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table ='carts';
    protected $filables=['product_id','quantity','price','sale_price','user_id','created_at','updated_at'];
}
