<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function findByPhone(Request $request){
        $id= $request->id;
        
        $data=  DB::select("CALL commentByPhone(".$id.")");
        return response()->json([$data]);
    }

}
