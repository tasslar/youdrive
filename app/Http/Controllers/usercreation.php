<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MasterCountry;
use App\Models\UserGeneralBasicDetails;
use App\Models\UserGeneralImageDetails;
use App\Models\UserGeneralOperationDetails;
use App\Models\UserGeneralPrivateDetails;
use App\Models\UserGeneralRightManagement;
class usercreation extends Controller
{
	public function __construct(Request $request)
    {    
        $this->request          = $request;                         
    }
    public function index($value='')
    {
    	$inputArr = $this->request->only('name','email','password','user_role','user_title','user_abbreviation_name','user_first_name','user_sur_name','user_abbreviation_name','user_dob','image_url','user_street_number_1','user_postcode_town_1','user_country_1','user_state_1','user_phone_1','user_mobile_1','user_email_2','user_street_number_2','user_postcode_town_2','user_country_2','user_state_2','user_phone_2','user_mobile_2','user_email_2');
    	$validation_UserGeneralBasicDetails = ['user_first_name'=>$inputArr['name'],'user_email'=>$inputArr['name'],'user_sur_name'=>$inputArr['name']];
    	$GeneralBasicDetails = UserGeneralBasicDetails::validation($validation_UserGeneralBasicDetails);
    	 if (! $GeneralBasicDetails->passes()){
    	 	return redirect()->back()->withInput();
    	}
    	/*user input value*/
	    $user_InputArr        			= 	[
			    								'name'						=> $inputArr['name'],
			    								'email'						=> $inputArr['email'],
			    								'password'					=> $inputArr['password'],
			    								'user_role'					=> $inputArr['user_role'],
			    								'user_role'					=>1
			    							];
		/*user create query*/
		$user_create 					=   User::create($user_InputArr);

		/*UserGeneral InputArr*/
		$UserGeneral_InputArr 			= 	[
												'user_id' 					=> $user_create,
			    								'user_title'			 	=> $inputArr['user_title'],
			    								'user_first_name'		 	=> $inputArr['user_first_name'],
			    								'user_sur_name'			 	=> $inputArr['user_sur_name'],
			    								'user_abbreviation_name' 	=> $inputArr['user_abbreviation_name'],
			    								'user_dob' 				 	=> $inputArr['user_dob'],
			    							];
			    							/*UserGeneralBasicDetails create*/
			    							UserGeneralBasicDetails::create($UserGeneral_InputArr);
			    							$path        = public_path('uploadimages'.'/'); 
			    							UserGeneralImageDetails::UserGeneralImageDetails($this->request->file('user_image_url'),$path));
		/*Image value*/
	    $UserGeneralImage_InputArr 		=	[
	    										'user_id'					=> $user_create,
		    									'user_image_url' 			=> $inputArr['user_image_url'],
		    								];

		    								UserGeneralImageDetails::create($UserGeneralImage_InputArr);

	    $UserGeneralOperation_InputArr 	= 	[
	    										'user_id'					=> $user_create,
	    										'user_street_number'		=> $inputArr['user_street_number'],
	    										'user_postcode_town'		=> $inputArr['user_postcode_town'],
	    										'user_country'				=> $inputArr['user_country'],
	    										'user_state'				=> $inputArr['user_state'],
	    										'user_phone'				=> $inputArr['user_phone'],
	    										'user_mobile'				=> $inputArr['user_mobile'],
	    										'user_email'				=> $inputArr['user_email'],
	    									];

	    									UserGeneralOperationDetails::create($UserGeneralOperation_InputArr);

	    $UserGeneralRight_InputArr 		=   [
	    										'user_id'					=> $user_create,
	    										'manager' 					=> $inputArr['manager'],
	    										'mobile_client' 			=> $inputArr['mobile_client'],
	    										'ops_mobile_client' 		=> $inputArr['ops_mobile_client'],
	    										'display_overview' 			=> $inputArr['display_overview'],
	    									];      

	    									UserGeneralRightManagement::create($UserGeneralRight_InputArr);  

    }
}
