<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccessoryResource;
use App\Models\Accessory;
use App\Models\Brand;
use Illuminate\Http\Request;

class AccessoryControllerWeb extends Controller
{
    public function create(){
        $brands = Brand::all();
        return view('accessory.createNewAccessory',['brands'=>$brands]);
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $phone = Accessory::find($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('phone.updatePhone', compact('phone'));
    }
    public function store(Request $request){
        Accessory::create($request->all());
        echo"success create phone";
        return redirect()->route('accessory.index')
        ->with('success','Accessory created successfully.');
    }
    public function index(){
        $data = Accessory::all();
        $brands = Brand::all();
        return view('Accessory/showAccessory',['datas' => $data,'brands'=>$brands]);
    }
    public function show($id)
    {
        $program = Accessory::find($id);

        if (is_null($program)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new AccessoryResource($program)]);
    }
    public function destroy($id)
    {
        $phone = Accessory::find($id);
        $phone->delete();
        return redirect()->route('phone.index')
        ->with('success','Product deleted successfully');
    }
    public function update(Request $request, $id)
    {                                  
        $phone=Accessory::find($id);
        $phone->update($request->all());
        return $phone;
    }
}
