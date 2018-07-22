<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CRM;

class crmvalueviewController extends Controller
{
   public function crmview()
   {
        $crmdata = CRM::all();
        return view('databaseval')->with('dbval',$crmdata);
    }
}

