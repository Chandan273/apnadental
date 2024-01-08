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

    public function otpLessSendOtp(Request $request){
        $phoneNo = $request->input('phoneNumber');
        $orderId = $request->input('orderId');

        if ($phoneNo) {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://auth.otpless.app/auth/otp/v1/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "phoneNumber":"91' . $phoneNo . '",
                    "orderId":' . $orderId . ',
                    "hash":"",
                    "otpLength": 6,
                    "channel":"SMS,WHATSAPP",
                    "expiry": 60
                }',
                CURLOPT_HTTPHEADER => array(
                    'clientId: XSZLPP00K2TZ46F54J8FJU6C6M0UKONM',
                    'clientSecret: 6767afhhin8fsje5lbuevi2li4sqt75g',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            if ($response === false) {
                $error = curl_error($curl);
                return response()->json(['success' => false, 'message' => 'Curl Error: ' . $error]);
            }

            curl_close($curl);

            return response()->json(['success' => true, 'message' => 'OTP sent successfully.', 'response' => $response]);
        }

    }

    public function verifyOTP(Request $request)
    {
        $phoneNo = $request->input('phone_no');
        $otp = $request->input('otp');
        $orderId = $request->input('orderId');
        $user = User::where('phone_no', $phoneNo)->first();

        if(empty($user)){
            $user = new User();
            $user->name = $request->input('phone_no');
            $user->email  = $request->input('phone_no').'@apnadental.com';
            $user->phone_no = $request->input('phone_no');
            $user->	otp = 123456;
            $user->	password = Hash::make($request->input('phone_no'));
            $user->save();
        }

        if($user){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://auth.otpless.app/auth/otp/v1/verify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "orderId": ' . $orderId . ',
                "otp": ' . $otp . ',
                "phoneNumber": "91' . $phoneNo . '"
            }',
            CURLOPT_HTTPHEADER => array(
                'clientId: XSZLPP00K2TZ46F54J8FJU6C6M0UKONM',
                'clientSecret: 6767afhhin8fsje5lbuevi2li4sqt75g',
                'Content-Type: application/json'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $response = json_decode($response, true);

            if(isset($response['isOTPVerified']) && $response['isOTPVerified']){
                Auth::login($user);

                return response()->json(['success' => true, 'response'=>$response, 'message' => 'Login Succesfully!', 'userData' => $user]);
            }else{
                return response()->json(['success' => false, 'response'=>$response, 'message' => $response['reason']]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Phone Number Not Found!']);
        }
    }

    public function resendOtp(Request $request)
    {
        $orderId = $request->input('orderId');

        if(!empty($orderId)){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://auth.otpless.app/auth/otp/v1/resend',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "orderId": '.$orderId.'
            }',
            CURLOPT_HTTPHEADER => array(
                    'clientId: XSZLPP00K2TZ46F54J8FJU6C6M0UKONM',
                    'clientSecret: 6767afhhin8fsje5lbuevi2li4sqt75g',
                    'Content-Type: application/json'
                ),
            ));
        
            $response = curl_exec($curl);

            curl_close($curl);

            $response = json_decode($response, true);

            if(isset($response['orderId']) && $response['orderId']){
                return response()->json(['success' => true, 'response' => $response, 'message' => 'OTP sent succesfully!']);
            }else{
                return response()->json(['success' => false, 'response' => $response, 'message' => $response['message']]);
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
