<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\marketingform;

class MarketingFormController extends Controller
{
		 public function formfield()
    {
        return view('marketingform');
    }
   public function marketingform(Request $request)
    {
	//return $request->all();

    	$formdata=$request->validate([
    		'adminOrganization'=>'required|max:40',
    		'adminCountry'=> 'required|max:10',
    		'adminothercountry'=>'required|max:10|unique:posts',
    		'adminState'=>'required|max:10|',
    		'adminCity'=>'required|max:10',
    		'adminAddress'=>'required|max:10',
    		'adminEmail'=>'required',
    		'adminindustry'=>'required',
    		'representative'=>'required',
    		'followup'=>'required',
    		'note'=>'required',
    		'Response'=>'required',
    		'value'=>'required',
    		'contactno'=>'required',
    		'duties'=>'required',
    		'clienttype'=>'required',
    		'dutiesotherfield'=>'required'
    	]);
    	print_r('$formdata');
    	dd($formdata);
    	$marktngfrm = new marketingform();
    	$formdata=$request->all();
    	$marktngfrm->Organization_Name =$formdata['adminOrganization'];
    	$marktngfrm->Country_Name =$formdata['adminCountry'];
    	$marktngfrm->Other_Country= $formdata['adminothercountry'];
    	$marktngfrm->State= $formdata['adminState'];
    	$marktngfrm->city=$formdata['admincity'];
    	$marktngfrm->Email=$formdata['Email'];
    	$marktngfrm->representative= $formdata['representative'];
    	$marktngfrm->followup=$formdata['followup'];
    	$marktngfrm->note=$formdata['note'];
    	$marktngfrm->Response= $formdata['Response'];
    	$marktngfrm->value=$formdata['value'];
    	$marktngfrm->contactno=$formdata['contactno'];
    	$marktngfrm->duties= $formdata['duties'];
    	$marktngfrm->clienttype=$formdata['clienttype'];
    	$marktngfrm->dutiesotherfield=$formdata['dutiesotherfield'];
    	$marktngfrm->save();



    }




}
