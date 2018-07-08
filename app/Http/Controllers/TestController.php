<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;

class TestController extends Controller
{
    //
    public function crmdb(Request $request)
    {
        $inputdata=$request->all(); //$request->get(''name); $inputdata['name']
        //return $inputdata['name'];


        $crm = new Client();
        $crm->name = $inputdata['name']; //$request->get('name')
        $crm->address    = $inputdata['address'];
        $crm->email = $inputdata['email']; //$request->get('name')
        $crm->position    = $inputdata['position'];
        $crm->dob = $inputdata['dob']; //$request->get('name')
        $crm->gender    = $inputdata['gender'];
        $crm->anniversary = $inputdata['anniversary']; //$request->get('name')
        $crm->married    = $inputdata['married'];


        $crm->save();

        return $crm;
        
        return view('welcome');
    }
}
