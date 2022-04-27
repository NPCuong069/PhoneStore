<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = false;
    protected $table = "phone";
    protected $primaryKey = 'id';
    protected $fillable =[
        'phone_name','phone_price','phone_details','phone_brand'
    ];

}
