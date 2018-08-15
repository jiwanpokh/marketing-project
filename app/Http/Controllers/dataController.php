<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\View;
use App\CRM;

class dataController extends Controller
{
    public function crmdb(Request $request)
   		{
   			$inputdata=request()->validate
   			([
        		'name' => 'required|max:255',
        		'address' => 'required',
        		'email'=> 'required|email',
        		'position'=> 'required|max:255',
        		'dob'=>'required|date',
        		'gender'=>'required',
        		'anniversary'=>'required|date',
        		'married'=>'required',
        		'mobile'=>'numeric|min:10'
   			 ]); 
        	$inputdata=$request->all(); //$request->get(''name); $inputdata['name']
       		 							//return $inputdata['name'];
            $crm = new CRM();
        	$crm->name = $inputdata['name']; //$request->get('name')
        	$crm->address = $inputdata['address'];
        	$crm->email = $inputdata['email']; //$request->get('name')
        	$crm->position = $inputdata['position'];
        	$crm->dob = $inputdata['dob']; //$request->get('name')
        	$crm->gender = $inputdata['gender'];
        	$crm->anniversary = $inputdata['anniversary']; //$request->get('name')
        	$crm->married = $inputdata['married'];
        	$crm->mobile = $inputdata['mobile'];

        	$crm->save();

    	}
    public function crmview()
        {
            $crmdata = CRM::all();
            return view('databaseval')->with('dbval',$crmdata);
        }
    public function delete($id)
    {
        $crmdata = CRM::find($id)->delete();
        return redirect('crmview');
    }

    public function edit($id)
    {
        $crmdata = CRM::find($id);
        return redirect('crm');
    }
 }
