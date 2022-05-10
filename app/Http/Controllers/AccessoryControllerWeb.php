<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccessoryResource;
use App\Models\Accessory;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class AccessoryControllerWeb extends Controller
{
    public function create(){
        $brands = Brand::all();
        return view('accessory.createNewAccessory',['brands'=>$brands]);
    }
    public function edit($id){
        $brands = Brand::all();
        $phone = Accessory::find($id);
        return view('accessory.updateAccessory', ['phone'=>$phone,'brands'=>$brands]);
    }
    public function store(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg|max:5000'
        ]);
        $inputName =     str_replace(' ', '', $request->accesory_name);
        $imageName = $inputName.Str::random(5).'.'.$request->image->extension();
        Storage::disk('public')->put('images/'.$imageName,file_get_contents($request->image));
        $request['accessory_image'] = $imageName;
        $request->merge([
            'phone_image' => $imageName
        ]);
        $data = $request->only('accesory_name','accesory_price','accesory_details','brand_id','accessory_image');
        Accessory::create($data);
        return redirect()->route('accessory.index')
        ->with('success','Accessory created successfully.');
    }
    public function index(){
        $data = Accessory::paginate(5);
        $brand = Brand::all();
        return view('Accessory/showAccessory',['datas' => $data,'brands'=>$brand]);
    }

    public function show(Request $request)
    {
        $data = Accessory::find($request->id);
        $brand = Brand::all();
        return view('Customer/accessory-detail',['data' => $data,'brands'=>$brand]);
    }
    public function customerIndex(){
        $data = Accessory::paginate(12);
        $brand = Brand::all();
        return view('Customer/accessory',['datas' => $data,'brands'=>$brand]);
    }
    public function destroy($id)
    {
        $phone = Accessory::find($id);
        $phone->delete();
        return redirect()->route('phone.index')
        ->with('success','Product deleted successfully');
    }
    public function update(Request $request,Accessory $phone)
    {                                  
        $phone->update($request->all());
        return redirect()->route('phone.index')
        ->with('success','Phone updated successfully');
    }
}
