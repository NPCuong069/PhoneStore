<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cart extends Authenticatable
{
    public $timestamps = false;
    protected $table = "cart";
    protected $primaryKey = 'id';
    protected $fillable = [
        'cart_name',
        'cart_date',
        'cart_status',
        'phone',
        'cart_status',
        'matp',
        'maqh',
        'xaid',
        'cart_address'
    ];

}
