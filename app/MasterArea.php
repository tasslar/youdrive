<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterArea extends Model
{
    use softDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table     = 'master_countries';
    protected $fillable  = [
        'country_id',
        'area_name'
        'status',
    ];

    public static function validation($inputArr)
    {
        $rules     = [
        'country_name'   => ['required'],
        'status'         => ['required'],
    ];
                  
        $messages = [
        'country_name.required' => 'You must at least give a value for your country.',
        'status.required'       => 'Please select a category for your country status',
    ];
        $validator = \Validator::make($inputArr, $rules, $messages);
        return $validator;
    }
}
