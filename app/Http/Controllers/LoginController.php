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
    public function registerPage(Request $request)
    {
        try {

            $RegisterData = [
                
                "name"=>$request->name,
                "email"=>$request->email,
                "role"=>$request->role,
                "password"=>Hash::make($request->pass)

            ];
            $CheckRegister = DB::table('users')->insert($RegisterData);
            if ($CheckRegister) {
                return view('index',compact('CheckRegister'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
      
        // return $request->all();
    }

    public function Login(Request $request){
        // return $request->all();
        $userdata =[
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($userdata)){
            $AuthName = Auth::user();
            $request->session()->put('user',$AuthName);  
            // return $request->session()->get('user');

            return 1;
            // return redirect()->route('index')->with(['userData'=>$request->session()->get('user')]);
        }else{
            return 0;
            // return redirect()->back()->with('error', 'Something went wrong.');
        }
      
    }

    public function Logout(Request $request){
        if($request->session()->flush()){
            return redirect()->back()->with('success', 'Succesfully Log Out. ');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');

        }
    }
}
