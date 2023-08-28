<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;

class AuthController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return view('admin.auth.login');
        }

        return redirect("admin/dashboard");
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }
  
        return redirect("admin/login")->withError('Opps! You do not have access');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()
                ->intended('admin/dashboard')
                ->withError('You have Successfully loggedin');
        }
  
        return redirect("admin/login")->withError('Opps! You have entered invalid credentials');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }
}
