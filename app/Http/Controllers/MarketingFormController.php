<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingFormController extends Controller
{
   public function marketingform(Request $request)
    {
    	$validatedata=$request->validate([
    		'adminOrganization'=>'required|max:40'
    		'adminCountry'=> 'required|max:10'
    		''
    	])


    }




}
