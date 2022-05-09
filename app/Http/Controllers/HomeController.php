<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use App\Models\Accessory;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\PhoneResource;
class HomeController extends Controller
{
    public function index(){
        $phone = Phone::all()->take(4);
        $accessory = Accessory::all()->take(4);
        $brand = Brand::all();
        return view('home',['phones' => $phone,'brands'=>$brand,'accessories'=>$accessory]);
    }
    
}
