<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Resources\PhoneResource;
class PhoneController extends Controller
{
    public function create(){
        return view('phone.create');
    }
    public function store(Request $request){
        $data = $request->all();
        echo"success create phone";
        return response()->json(['Program created successfully.',new PhoneResource($data)]);
    }
    public function index(){
        $data = Phone::all();
        return response()->json([PhoneResource::collection($data), 'Programs fetched.']);
    }
    public function show($id)
    {
        $program = Phone::find($id);
        if (is_null($program)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new PhoneResource($program)]);
    }
    public function destroy($id)
    {
        $phone = Phone::find($id);
        $phone->delete();
        return response()->json('Program deleted successfully');
    }
    public function update(Request $request, $id)
    {
        $phone=Phone::find($id);
        $phone->update($request->all());
        return $phone;
    }
    
}
