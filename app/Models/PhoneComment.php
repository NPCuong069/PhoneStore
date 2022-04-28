<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneComment extends Model
{
    public $timestamps = false;
    protected $table = "phone_comment";
    protected $primaryKey = 'id';
    protected $fillable =[
        'phone_name','phone_price'
    ];
}
