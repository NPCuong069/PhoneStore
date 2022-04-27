<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(Request $request, $id)
    {
        $data = $request->url();
        return 'hello'.$data;
    }

    public function login(Request $request)
    {
        // $data= DB::select('call quanbythanhpho("1")');
        $data= DB::table('devvn_tinhthanhpho')->get();

        return view ('login',['data'=>$data]);
        
    }
    public function submitLogin(Request $request){
     
        $request-> validate([
            "username"=>"required|min:3|max:5"
            ,
            "password"=>"required"
        ]);

       return "Successfully";
    }
    public function subCat(Request $request)
    {
         
        $parent_id = $request->matp;
         
        $subcategories = DB::select('call quanbythanhpho('.$parent_id.')');
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }   
    public function subCat2(Request $request)
    {
         
        $parent_id = $request->maqh;
         
        $subcategories2 = DB::select('call phuongbyquan('.$parent_id.')');
        return response()->json([
            'subcategories2' => $subcategories2
        ]);
    } 
}
