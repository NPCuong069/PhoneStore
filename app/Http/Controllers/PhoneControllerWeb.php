<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\PhoneResource;
class PhoneControllerWeb extends Controller
{
    public function create(){
        $brands = Brand::all();
        return view('phone.createNewPhone',['brands'=>$brands]);
    }
    public function edit($id){
        $brands = Brand::all();
        $phone = Phone::find($id);
        return view('phone.updatePhone', ['phone'=>$phone,'brands'=>$brands]);
    }
    public function store(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg|max:5000'
        ]);
        $inputName =     str_replace(' ', '', $request->phone_name);
        $imageName = $inputName.Str::random(5).'.'.$request->image->extension();
        Storage::disk('public')->put('images/'.$imageName,file_get_contents($request->image));
        $request['phone_image'] = $imageName;
        $request->merge([
            'phone_image' => $imageName
        ]);
        $data = $request->only('phone_name','phone_price','phone_details','brand_id','phone_image');
        phone::create($data);
        return redirect()->route('phone.index')
        ->with('success','Phone created successfully.');
    }
    public function index(){
        $data = Phone::paginate(5);
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
    public function update(Request $request,Phone $phone)
    {                                  
        $phone->update($request->all());
        return redirect()->route('phone.index')
        ->with('success','Phone updated successfully');
    }
    
}