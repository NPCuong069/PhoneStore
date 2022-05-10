<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Phone;
use App\Models\Accessory;
use App\Models\Brand;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
        $phones=[];
        $accessories=[];
        if($cart){
            if(isset($cart['phone'])){
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
            if(isset($cart['accessory'])){
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
    public function orderInfo(Request $request)
    {
        // $data= DB::select('call quanbythanhpho("1")');
        $data= DB::table('devvn_tinhthanhpho')->get();

        return view ('Customer/orderInformation',['data'=>$data]);
        
    }
    public function payment(Request $request)
    {
        $this->validate($request, [
            'card_no' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
            'cart_address'=>'required',
            'phone'=>'required'
        ]);
        $data= $request->only('cart_name','cart_address','phone');
        $cartData = Cart::create($data);
        $cart = session()->get('cart');
        if(isset($cart['phone'])){
            foreach ($cart['phone'] as $phone){

                $id =$phone['id'];
                $currentPhone = Phone::find($id);
                $phones[$id]=[
                    'phone_name'=>$currentPhone->phone_name,
                    'quantity'=>$phone['quantity'],
                    'phone_price'=>$currentPhone->phone_price,
                    'phone_image'=>$currentPhone->phone_image
                ];
                CartItem::create([
                    'cart_id'=>$cartData->id,
                    'phone_id'=>$currentPhone->id,
                    'quantity'=>$phone['quantity']
                ]);
            }
        }
        if(isset($cart['accessory'])){
            foreach ($cart['accessory'] as $accessory){

                $id =$accessory['id'];
                $currentAccessory = Accessory::find($id);
                $accessories[$id]=[
                    'phone_name'=>$currentAccessory->accesory_name,
                    'quantity'=>$accessory['quantity'],
                    'phone_price'=>$currentAccessory->accesory_price,
                    'phone_image'=>$currentAccessory->accessory_image
                ];
                CartItem::create([
                    'cart_id'=>$cartData->id,
                    'phone_id'=>$currentAccessory->id,
                    'quantity'=>$accessories['quantity']
                ]);
            }
        }
    }
}
