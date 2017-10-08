<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\MasterCountry;
use Validator;
use Response;
class MasterController extends Controller
{
	protected $request;
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    public function mastercountrymanagement(Request  $request)
    {   
        $fetch_master = MasterCountry::get();
        $country_value = array('id'=>0);
        $data = [
                    'country'      => $country_value,
                    'fetch_master' => $fetch_master
                ];
    	return view('Admin.Master.mastercountrymanagement',$data);
    }
    public function addcountry(Request  $request,$data)
    {
        $inputArr = $request->only('id','country_name','active');
        if(Input::has('country_name')){
            $rules   = array(
                            'country_name'=>"required",
                            'active'      => 'required',
                        );
            $validator = MasterCountry::validation($inputArr);
            if(! $validator->passes()){
                if($this->request->ajax()){
                        return Response::json(array(
                        'status' => 400,
                        'errors' => $validator->getMessageBag()->toArray()
                    ), 200); 
                }
            }
            $insertVal = [
                            'country_name' => $inputArr['country_name'],
                            'active'       => $inputArr['active']
                         ];
            if($inputArr['id'] == null){
                $insert_tbl = MasterCountry::create($insertVal);
            }
            else{
                $insert_tbl = MasterCountry::where('id',$inputArr['id'])->update($insertVal);
            }
            if($insert_tbl){
                    if($this->request->ajax()){
                            return Response::json(array(
                            'status' => 200,
                            'success' =>"Successfully Inserted"
                        ), 200); 
                    }
                }
        }
        if($data == 0){
                $inputVal = array(
                                    'id'           => old('id'),
                                    'country_name' => old('country_name'),
                                    'active'       => old('active')
                                 );
            }else{
                $fetch_val = MasterCountry::where('id',$data)->first();
                $inputVal = array(
                                    'id'           => $fetch_val->id,
                                    'country_name' => $fetch_val->country_name,
                                    'active'       => $fetch_val->active
                                 );
            }
            $data = [
                        'inputVal' =>$inputVal
                    ];
        return view('Admin.Master.addcountry_tab',$data);
    }
}
