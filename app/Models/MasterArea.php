<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MasterArea extends Model
{
    use softDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table     = 'master_area';
    protected $fillable  = ['country_id','area_name','status','deleted_at'];

    public static function validation($inputArr)
    {
        $rules     = [
                'country_id'   => ['required'],
                'area_name'   => ['required'],
                'status'         => ['required'],
            ];
                  
        $messages = [
        'country_id.required' => 'You must at least give a value for your country name.',
        'area_name.required' => 'You must at least give a value for your area name.',
        'active.required'       => 'Please select a category for your area status',
    ];
        $validator = \Validator::make($inputArr, $rules, $messages);
        return $validator;
    }
}
