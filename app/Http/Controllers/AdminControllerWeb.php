<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Validator;
use Session;
class AdminControllerWeb extends Controller
{
    public function show()
    {
        return view('admin.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('phone')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function edit(Request $request){
        $user = User::find($request->id);
        return view('admin.updateAdmin',['data'=>$user]);
    }
    public function update(Request $request){
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8'
        ]);
        $user = User::find($request->id);
        $request['password']=Hash::make($request->password);
        $user -> update($request->all());
        return redirect()->route('admin.index')
        ->with('success','Admin deleted successfully');
    }
    public function registration()
    {
        return view('admin.createNewAdmin');
    }
    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect()->route('admin.index')
        ->with('success','Admin deleted successfully');
    }
      
    public function customRegistration(Request $request)
    {  
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);
        $role=1;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role,
            'password_reset'=>0
         ]);
         
         return redirect()->route('admin.index')
        ->with('success','Admin deleted successfully');
    }

    public function index (){
        $data = User::all();
        return view('admin/showAdmin',['datas' => $data]);
    }
    public function signOut() {
        Auth::logout();
        FacadesSession::flush();
        return Redirect('login');
    }

   
}
