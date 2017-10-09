<?php

namespace App;

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
        'country_name',
        'status',
        'deleted_at'
    ];

    public static function validation($inputArr)
    {
        $rules     = [
        'country_name'   => ['required'],
        'active'         => ['required'],
    ];
                  
        $messages = [
        'country_name.required' => 'You must at least give a value for your area.',
        'active.required'       => 'Please select a category for your area status',
    ];
        $validator = \Validator::make($inputArr, $rules, $messages);
        return $validator;
    }
}
