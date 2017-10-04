<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\MasterCountry;
use Validator;
class MasterController extends Controller
{
	protected $request;
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    public function mastercountrymanagement(Request $request)
    {
    	if(Input::has('add_country')){
    		  $country_field = $this->request->only('country_name','active');
    		  $country       = new MasterCountry;    		 
    		   if (!$country::validation($country_field)) {
    		   	 return redirect()->back()->withInput()->withErrors($country->errors());
		        }

    	}
    	return view('Admin.Master.mastercountrymanagement');
    }
}
