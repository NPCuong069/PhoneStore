<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    public $timestamps = false;
    protected $table = "accesory";
    protected $primaryKey = 'id';
    protected $fillable =[
        'accesory_name','accesory_price','accesory_details','brand_id','accessory_image','accessory_available'
    ];

}
