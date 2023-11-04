<?php

namespace App\Http\Controllers\User\Auth;

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
            return view('apnadental.register');
        }

        return redirect("/");
    }

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('admin.dashboard');
    //     }
  
    //     return redirect("admin/login")->withError('Opps! You do not have access');
    // }

    public function verifyOTP(Request $request)
    {
        $phoneNo = $request->input('phone_no');
        $otp = $request->input('otp');

        $user = User::where('phone_no', $phoneNo)->first();

        if(empty($phoneNo)){
            return response()->json(['success' => false, 'message' => 'Please enter registered phone number.']);
        }

        if ($user) {
            if ($otp == $user->otp) {
                Auth::login($user);
                
                return response()->json(['success' => true, 'userData' => $user]);
            } else {
                return response()->json(['success' => false, 'message' => 'Invalid OTP. Please try again.']);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Phone Number Not Found!']);
        }
    }

    /**
     * User Registraion
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_no' => 'required|min:10|unique:users',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect()->back()->with('success', 'You have Successfully Registered!');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_no' => $data['phone_no'],
            'password' => Hash::make($data['phone_no'])
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return response()->json(['success' => true, 'userData' => '']);
    }
}
