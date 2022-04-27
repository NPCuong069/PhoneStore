<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        return response()->json(['Program created successfully.',new CartResource($data)]);
    }
    public function index(){
        $data = Cart::all();
        return response()->json([CartResource::collection($data), 'Programs fetched.']);
    }
    public function show($id)
    {
        $program = Cart::find($id);
        if (is_null($program)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new CartResource($program)]);
    }
    public function destroy($id)
    {
        $phone = Cart::find($id);
        $phone->delete();
        return response()->json('Program deleted successfully');
    }
    public function update(Request $request, $id)
    {
        $phone=Cart::find($id);
        $phone->update($request->all());
        return $phone;
    }
}
