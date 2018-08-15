<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marketingform;
use DB;

class MarketingFormController extends Controller
{
		 public function formfield()
    {
        return view('marketingform');
    }
   public function marketingform(Request $request)
    {
	//return $request->all();

    	$formdata=request()->validate
    	 ([
    		'adminOrganization'=>'required|max:400',
    		'adminCountry'=> 'required|max:100',
    		'adminothercountry'=>'nullable|max:100',
    		'adminState'=>'required|max:100|',
    		'admincity'=>'required|max:100',
    		'adminAddress'=>'required|max:100',
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
    		'dutiesotherfield'=>'nullable|max:10'
    	]);
    	 
    	$formdata=$request->all();
    	$marktngfrm = new marketingform();
       	$marktngfrm->Organization_Name =$formdata['adminOrganization'];
    	$marktngfrm->Country_Name =$formdata['adminCountry'];
    	$marktngfrm->Other_Country= $formdata['adminothercountry'];
    	$marktngfrm->State= $formdata['adminState'];
    	$marktngfrm->city=$formdata['admincity'];
    	$marktngfrm->Admin_Address=$formdata['adminAddress'];
    	$marktngfrm->industry=$formdata['adminindustry'];
    	$marktngfrm->Email=$formdata['adminEmail'];
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
    public function data() {

    return marketingform::all();
    }
    
    public function clients()
    {
        $clientdata = marketingform::where('clienttype','client')->get();

        // $clientdata=marketingform::where('id',2);
        // $clientdata=marketingform::findOrFail(2);
        //return $clientdata;
       // return view('clients',compact('clientdata'));
        return view('clients')->with('clientdata',$clientdata);
    }

    public function potentialclients()
    {
        $clientdata = marketingform::where('clienttype','Potentialclients')->get();

        // $clientdata=marketingform::where('id',2);
        // $clientdata=marketingform::findOrFail(2);
        //return $clientdata;
       // return view('clients',compact('clientdata'));
        return view('potentialclients')->with('pclientdata',$clientdata);
    }
    public function edit($id){
        
    }
    
    public function delete($id)
    {
        $deletedata = marketingform::find($id)->delete();
        return redirect('clients');
    }




}
