<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Phone;
use App\Models\Accessory;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    public function currentCart(Request $request){
        $cart = session()->get('cart');
        $phones=null;
        $accessories=null;
        if($cart){
            if($cart['phone']){
                foreach ($cart['phone'] as $phone){

                    $id =$phone['id'];
                    $currentPhone = Phone::find($id);
                    $phones[$id]=[
                        'phone_name'=>$currentPhone->phone_name,
                        'quantity'=>$phone['quantity'],
                        'phone_price'=>$currentPhone->phone_price,
                        'phone_image'=>$currentPhone->phone_image
                    ];
                }
            }
            if($cart['accessory']){
                foreach ($cart['accessory'] as $accessory){

                    $id =$accessory['id'];
                    $currentAccessory = Accessory::find($id);
                    $accessories[$id]=[
                        'phone_name'=>$currentAccessory->accesory_name,
                        'quantity'=>$accessory['quantity'],
                        'phone_price'=>$currentAccessory->accesory_price,
                        'phone_image'=>$currentAccessory->accessory_image
                    ];
                }
            }
        }

        return view('Customer/cart',['phones' => $phones,'accessories'=>$accessories]);
    }
    public function addToCart(Request $request)
    {
        if($request->has('phoneid')){
            $id=$request->phoneid;
            $product = Phone::find($request->phoneid);
            
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                        'phone'=>[
                            $id => [
                                "id" => $id,
                                "quantity" => 1,
                            ]
                        ]

            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart['phone'][$id])) {
            $cart['phone'][$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart['phone'][$id] = [
            "id" => $id,
            "quantity" => 1,
            
        ];
        session()->put('cart', $cart);
        }
        else 
        if($request->has('accessoryid')){
            $id=$request->accessoryid;
            $product = Cart::find($request->accessoryid);
            
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                'accessory' =>[
                    $id => [
                        "id" => $id,
                        "quantity" => 1,
                    ]
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart['accessory'][$id])) {
            $cart['accessory'][$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart['accessory'][$id] = [
            "id" => $id,
            "quantity" => 1,
            
        ];
        session()->put('cart', $cart);
        }


        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
