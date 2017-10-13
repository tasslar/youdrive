<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\MasterCountry;
use App\Models\MasterArea as areaname;
use Validator;
use Response;
use Session;
class MasterController extends Controller
{
	protected $request;
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    /*master country*/
    public function mastercountrymanagement(Request  $request)
    {   
        $fetch_master = MasterCountry::where('status','Active')->get();
        $country_value = array('id'=>0);
        $data = [
                    'country'      => $country_value,
                    'fetch_master' => $fetch_master
                ];
    	return view('Admin.Master.mastercountry',$data);
    }
    /*master add and edit country*/
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
                $fetch_val = MasterCountry::where('status','Active')->where('id',$data)->first();
                $inputVal = array(
                                    'id'           => $fetch_val->id,
                                    'country_name' => $fetch_val->country_name,
                                    'active'       => $fetch_val->active
                                 );
            }
            $data = [
                        'master_country' => $master_country,
                        'inputVal'       => $inputVal
                    ];
        return view('Admin.Master.addcountry_tab',$data);
    }
    /*delete country*/
    public function delete_counrty()
    {
        $delete_id = $this->request->only('delete_id');
        $fetch_val = MasterCountry::where('id',$delete_id['delete_id'])->delete();
        Session::flash('successdata', "Successfully Deleted");         
        return redirect('managecountry');
    } 
    /*master area management*/
    public function areamanagement()
    {
        $fetch_master = MasterCountry::get();
        $country_value = array('id'=>0);
        $data = [
                    'area'      => $country_value,
                    'fetch_master' => $fetch_master
                ];
        return view('Admin.Master.masterarea',$data);
    }
    /*add and edit area*/
    public function addarea(Request  $request,$data)
    {
        $inputArr = $request->only('country_id','area_name','status');
        if(Input::has('country_id')){
            $rules   = array(
                            'country_name'  =>"required",
                            'area_name'     =>"required",
                            'status'        => "required"
                        );
            $validator = areaname::validation($inputArr);
            dd($validator);
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
                            'status'       => $inputArr['active']
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
                                    'country_id'   => old('country_id'),
                                    'area_name'    => old('area_name'),
                                    'status'       => old('active')
                                 );
            }else{
                $fetch_val = MasterArea::where('id',$data)->first();
                $inputVal  = array(
                                    'id'           => $fetch_val->id,
                                    'country_name' => $fetch_val->country_name,
                                    'status'       => $fetch_val->active
                                 );
            }
            $master_country = MasterCountry::where('status','Active')->get();
            $data = [
                        'master_country' => $master_country,
                        'inputVal'       => $inputVal
                    ];
        return view('Admin.Master.addarea_tab',$data);
    } 
}
