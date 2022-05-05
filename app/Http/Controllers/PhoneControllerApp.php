<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PhoneControllerApp extends Controller
{
    public function index(){
        $data  = Http::get('http://127.0.0.1:8000/api/phone');
        echo $data;
        return view('Phone/showPhone',[$data]);
    }
}
