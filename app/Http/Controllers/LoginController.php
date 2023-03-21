<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Mail;
use  App\Mail\ContactUsMail;
use  App\Mail\SendMail;


class LoginController extends Controller
{
    public function index()
    {
        $data = 1;


        if (Auth::user()) {
            $getSubscriptionDetails = DB::table('subscriptions')->where('userid', Auth::user()->id)->first();
            // return $getSubscriptionDetails;
            if ($getSubscriptionDetails->subscriptionType === 'silver') {
                $subscriptiongetarr = [1];
            } else  if ($getSubscriptionDetails->subscriptionType === 'gold') {
                $subscriptiongetarr = [1, 2];
            } else  if ($getSubscriptionDetails->subscriptionType === 'platinum') {
                $subscriptiongetarr = [1, 2, 3];
            }
            $details  = DB::table('add_properties')->whereIn('advertisementPlan', $subscriptiongetarr)->orderBy('advertisementPlan', 'DESC')->get();
        } else {
            $details  = DB::table('add_properties')->get();
        }
        // return $details;

        return view('layouts.Dashboard', compact('data', 'details'));
    }

    public function loginPage()
    {
        $data = 0;
        return view('layouts.Auth', compact('data'));
    }

    public function register()
    {
        $data = 2;
        return view('layouts.Auth', compact('data'));
    }

    public function registerPage(Request $request)
    {
        try {
            $RegisterData = [
                "name" => $request->name,
                "email" => $request->email,
                "role" => $request->role,
                "password" => Hash::make($request->pass),
                "is_otp_verified" => 1
            ];
            $CheckRegister = DB::table('users')->insertGetId($RegisterData);
            if ($CheckRegister) {
                $otp = mt_rand(1000, 9999);
                $OtpInsert = DB::table('otps')->insert([
                    "userid" => $CheckRegister,
                    "emailid" => $request->email,
                    "otp" => $otp,
                    "verified" => 0
                ]);
                $data = \Mail::to($request->email)->send(new SendMail($otp));
                $e_msg = 0;
                return view('layouts.otp', compact('e_msg'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function Login(Request $request)
    {
        $userdata = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($userdata)) {
            $AuthName = Auth::user();
            $request->session()->put('user', $AuthName);
            if (Auth::user()->role == "buyer") {
                return redirect()->route('dasborad')->with(['userData' => $request->session()->get('user')]);
            } else {
                return redirect()->route('addAdminDashboard')->with(['userData' => $request->session()->get('user')]);
            }
        } else {
            return redirect()->back()->with('error', 'Incorrect E-mail or Incorrect Password');
        }
    }

    public function Logout(Request $request)
    {
        if ($request->session()->flush()) {
            return redirect("/")->with('success', 'Succesfully Log Out. ');
        } else {
            return redirect("/")->with('error', 'Something went wrong.');
        }
    }

    public function checkotp(Request $request)
    {
        $getOtp1 = $request->otp_1;
        $getOtp2 = $request->otp_2;
        $getOtp3 = $request->otp_3;
        $getOtp4 = $request->otp_4;
        $finalOtp = $getOtp1 . $getOtp2 . $getOtp3 . $getOtp4;
        $getOtpDetails = DB::table('otps')->where('otp', $finalOtp)->first();
        if ($getOtpDetails) {
            return view('layouts.subscription', compact('getOtpDetails'));
        } else {
            $e_msg = 1;
            return view('layouts.otp', compact('e_msg'));
        }
    }

    public function subscription(Request $request)
    {
        if ($request->submit == "silver") {
            $arr = [
                "days" => $request->pricingForSilver,
                "price" => "0",
                "userid" => $request->userid,
                "subscriptionType" => $request->submit,
                "subscriptionId" => 1
            ];
        }
        if ($request->submit == "gold") {

            if ($request->pricingForGold  == "7") {
                $price = "4.99";
            }
            if ($request->pricingForGold == "14") {
                $price = "7.99";
            }
            if ($request->pricingForGold == "21") {
                $price = "9.99";
            }

            $arr = [
                "days" => $request->pricingForGold,
                "price" => $price,
                "userid" => $request->userid,
                "subscriptionType" => $request->submit,
                "subscriptionId" => 2
            ];
        }
        if ($request->submit == "platinum") {

            if ($request->pricingForGold  == "7") {
                $price = "9.99";
            }
            if ($request->pricingForGold == "14") {
                $price = "14.99";
            }
            if ($request->pricingForGold == "21") {
                $price = "19.99";
            }
            $arr = [
                "days" => $request->pricingForPlatinum,
                "price" => $price,
                "userid" => $request->userid,
                "subscriptionType" => $request->submit,
                "subscriptionId" => 3
            ];
        }
        $createSubcription = DB::table('subscriptions')->insert($arr);
        if ($createSubcription) {
            $getUserDetails = DB::table('users')->where('id', $request->userid)->first();
            $userdata = [
                'email' => $getUserDetails->email,
                'password' => $getUserDetails->password
            ];
            $AuthName =  Auth::loginUsingId($getUserDetails->id);
            if (Auth::user()->role == "buyer") {
                return redirect()->route('dasborad')->with(['user' => Auth::user()]);
            } else {
                return redirect()->route('addAdminDashboard')->with(['user' => Auth::user()]);
            }
        }
    }
    public function getPropertyDetails($id)
    {
        $data = DB::table('add_properties')->where('id', $id)->first();
        return view('layouts.getPropertDetails', compact('data'));
    }

    public function catalog()
    {
        $data = 1;
        // $details  = DB::table('add_properties')->paginate(2);
        $details  = DB::table('add_properties')->get();
        return view('header.catalog', compact('data', 'details'));
    }

    public function about()
    {
        $data = 1;
        return view('header.about', compact('data'));
    }

    public function contactus()
    {
        $data = 1;
        return view('header.contactus', compact('data'));
    }

    public function sendMailContactUs(Request $request)
    {
        $data = \Mail::to($request->email)->send(new ContactUsMail($request->message));
        return redirect()->back();
    }
    public function searchFilter(Request $request)
    {
        $data = 1;
        if ($request->advertisementPlan) {
            $details =   DB::table('add_properties')->orWhere('advertisementPlan', $request->advertisementPlan)->get();
            return view('header.catalog', compact('data', 'details'));
        } else {
            $details =   DB::table('add_properties')->orWhere('city', $request->regions)->orWhere('road', $request->road)->orWhere('roomToRent', $request->roomToRent)->orWhere('advertisementPlan', $request->advertisementPlan)->get();
            return view('layouts.Dashboard', compact('data', 'details'));
        }
    }

    public function enquiry()
    {
        return view('layouts.enquiryForm');
    }

    public function enquirymail(Request $request)
    {
        $message = "Hello ! I want to connect with you. My personal details" . $request->email . "," . $request->name . "," . $request->phone;
        $data = \Mail::to($request->email)->send(new ContactUsMail($message));
        return redirect("/");
    }
}
