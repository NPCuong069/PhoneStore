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

    public function registration()
    {
        return view('admin.createNewAdmin');
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
         
        return redirect("phone")->withSuccess('New employee created successfully');
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
    // public function login(LoginRequest $request)
    // {
    //     $credentials = $request->credentials();

    //     if(!Auth::validate($credentials)):
    //         return redirect()->route('phone')
    //             ->withErrors(trans('auth.failed'));
    //     endif;

    //     $user = Auth::getProvider()->retrieveByCredentials($credentials);

    //     Auth::login($user);

    //     return $this->authenticated($request, $user);
    // }

    // public function index()
    // {
    //     return view('auth.login');
    // }  
      
   
}
