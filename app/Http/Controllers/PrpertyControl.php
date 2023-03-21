<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class PrpertyControl extends Controller
{
    public function addAdminDashboard()
    {
        return view('layouts.addAdminDashboard');
    }
   
    public function addPropertyForm()
    {
       return view('layouts.addPropertyForm');
    }

    public function addProperty(Request $request)
    {
        
        $file = $request->file('propertyImage');
        $savedimage1 ="";
        if ( $file) {
            $destinationPath = 'uploads';
                $savedimage1 = "http:\\\\".request()->getHttpHost()."/".$file->move($destinationPath,$file->getClientOriginalName());
        }
      
        $BodyData = [
                "propertyTitle" => $request->propertyTitle,
                "propertyDescription" => $request->propertyDescription,
                "postcode" => $request->postcode,
                "road" => $request->road,
                "city" => $request->city,
                "adType" => $request->adType,
                "propertyType" => $request->propertyType,
                "bedroom" => $request->bedroom,
                "bathroom" => $request->bathroom,
                "kitchen" => $request->kitchen,
                "reception" => $request->reception,
                "roomToRent" => $request->roomToRent,
                "room" => json_encode($request->room),
                "extras" => json_encode($request->extras),
                "services" => json_encode($request->services),
                "rent" => $request->rent,
                "rentAmount" => $request->rentAmount,
                "billInclude" => json_encode($request->billInclude),
                "availability" => $request->availability,
                "minLength" => $request->minLength,
                "maxLength" => $request->maxLength,
                "currentHousehold" => $request->currentHousehold,
                "avgAge" => $request->avgAge,
                "housemateGender" => $request->housemateGender,
                "occupation" => $request->occupation,
                "ethinicity" => $request->ethinicity,
                "prefferedHousemateAge" => $request->prefferedHousemateAge,
                "prefferedHousemateGender" =>$request->prefferedHousemateGender,
                "group" => $request->group,
                "advertiser" => $request->advertiser,
                "advertisementPlan" => json_encode($request->advertisementPlan),
                // "submit" => $request->submit,
                "propertyImage" => $savedimage1,
                "propertyVideo" =>"",
                "created_by"=>1
            ];

        $checkInsetData =  DB::table('add_properties')->insert($BodyData);
        if ($checkInsetData) {
            return redirect()->route('addAdminDashboard');  
        }
    }

    public function getAllProperty(Type $var = null)
    {
        return DB::table('add_properties')->get();

    }
    

}
