<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Mail;
use  App\Mail\SendMail;

class LoginController extends Controller
{
    public function index()
    {
        $data = 1;
        $details  = DB::table('add_properties')->get();
        return view('layouts.Dashboard',compact('data','details'));
    }
    public function loginPage()
    {
        $data = 0;
        return view('layouts.Auth',compact('data'));
    }
    public function register()
    {
        $data = 2;
        return view('layouts.Auth',compact('data'));
    }
    public function registerPage(Request $request)
    {
        try {
            $RegisterData = [ 
                "name"=>$request->name,
                "email"=>$request->email,
                "role"=>$request->role,
                "password"=>Hash::make($request->pass)
            ];
            $CheckRegister = DB::table('users')->insertGetId($RegisterData);
            // dd($CheckRegister);
            if ($CheckRegister) {
                $otp = mt_rand(1000, 9999);
                $OtpInsert = DB::table('otps')->insert([
                    "userid"=>$CheckRegister,
                    "emailid"=>$request->email,
                    "otp"=>$otp,
                    "verified"=>0
                ]);
                $data = \Mail::to($request->email)->send(new SendMail($otp));
                $e_msg = 0;
                return view('layouts.otp',compact('e_msg'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
      
    }

    public function Login(Request $request){
     $userdata =[
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($userdata)){
            $AuthName = Auth::user();
            $request->session()->put('user',$AuthName);  
            if ( Auth::user()->role == "buyer"){
                return redirect()->route('dasborad')->with(['userData'=>$request->session()->get('user')]);
            }else {
                return redirect()->route('addAdminDashboard')->with(['userData'=>$request->session()->get('user')]);
            }
        }else{
            // return 0;
            return redirect()->back()->with('error', 'Incorrect E-mail or Incorrect Password');
        }
      
    }

    public function Logout(Request $request){
        if($request->session()->flush()){
            return redirect("/")->with('success', 'Succesfully Log Out. ');
        }else{
            return redirect("/")->with('error', 'Something went wrong.');

        }
    }


    public function checkotp(Request $request){
         $getOtp1 = $request->otp_1;
         $getOtp2 = $request->otp_2;
         $getOtp3 = $request->otp_3;
         $getOtp4 = $request->otp_4;


         $finalOtp = $getOtp1.$getOtp2.$getOtp3.$getOtp4;
        $getOtpDetails = DB::table('otps')->where('otp',$finalOtp)->first();
        if ($getOtpDetails) {
            return redirect()->route('index')->with(["s_msg"=>"otp verified"]);
        }else{

            // return redirect()->route('index');
            $e_msg = 1;
            return view('layouts.otp',compact('e_msg'));

        }
    }

    public function getPropertyDetails($id)
    {
        $dd = DB::table('add_properties')->where('id',$id)->first();
        return $dd;
    }
}
