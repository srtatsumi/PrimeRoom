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

        $createSubcription = DB::table('subscriptions')->where('userid',$request->userid)->update($arr);
        return redirect()->back();
        
    }
}
