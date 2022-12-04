<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        $data = 1;
        return view('layouts.Dashboard',compact('data'));
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
            // return $request->all();
            // return $request->all();


            $RegisterData = [
                
                "name"=>$request->name,
                "email"=>$request->email,
                "role"=>$request->role,
                "password"=>Hash::make($request->pass)

            ];
            $CheckRegister = DB::table('users')->insert($RegisterData);
            if ($CheckRegister) {
                
               return redirect()->route('index');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
      
        // return $request->all();
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
            return redirect()->route('addPropertyForm')->with(['userData'=>$request->session()->get('user')]);
                
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
}
