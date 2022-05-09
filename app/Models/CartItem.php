<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public $timestamps = false;
    protected $table = "cart_item";
    protected $primaryKey = 'id';
    protected $fillable = [
        'cart_id',
        'phone_id',
        'accessory_id',
        'quantity'
    ];
}
