<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Resources\PhoneResource;
class PhoneControllerWeb extends Controller
{
    public function create(){
        $brands = Brand::all();
        return view('phone.createNewPhone',['brands'=>$brands]);
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $phone = Phone::find($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('phone.updatePhone', compact('phone'));
    }
    public function store(Request $request){

        Phone::create($request->all());
        echo"success create phone";
        return redirect()->route('phone.index')
        ->with('success','Phone created successfully.');
    }
    public function index(){
        $data = Phone::all();
        $brand = Brand::all();
        return view('Phone/showPhone',['datas' => $data,'brands'=>$brand]);
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
        return redirect()->route('phone.index')
        ->with('success','Product deleted successfully');
    }
    public function update(Request $request, $id)
    {                                  
        $phone=Phone::find($id);
        $phone->update($request->all());
        return $phone;
    }
    
}