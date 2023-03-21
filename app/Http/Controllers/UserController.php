<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class UserController extends Controller
{
    public function dasborad()
    {
        return view('user.userDashboard');
    }
    public function UserProfile()
    {
        $data = Auth::user();
        return view('user.userProfile',compact('data'));

    }
    public function Contact()
    {
        return view('user.contactUs');

    }
    public function Membership()
    {
        $data = DB::table('subscriptions')->where('userid',Auth::user()->id)->first();
        return view('user.membership',compact('data'));
    }

    public function updatemembership(Request $request)
    {
        # code...
        
    }
}
