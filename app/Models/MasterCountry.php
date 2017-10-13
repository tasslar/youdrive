<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MasterCountry extends Model
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
        'country_name.required' => 'You must at least give a value for your country.',
        'active.required'       => 'Please select a category for your country status',
    ];
        $validator = \Validator::make($inputArr, $rules, $messages);
        return $validator;
    }
}
