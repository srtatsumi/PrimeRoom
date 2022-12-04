<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('user.membership');
    }
}
