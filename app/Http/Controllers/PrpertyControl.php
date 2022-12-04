<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PrpertyControl extends Controller
{
   
    public function addPropertyForm()
    {
       return view('layouts.addPropertyForm');
    }

    public function addProperty(Request $request)
    {
        return $request->all();
    }

}
