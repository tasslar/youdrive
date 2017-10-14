<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserGeneralBasicDetails extends Model
{
    use softDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table     = 'user_general_basic_details';
    protected $fillable  = [
        'user_title',
        'user_first_name',
        'user_sur_name',
        'user_abbreviation_name',
        'user_dob'
    ];

    public static function validation($inputArr)
    {
        $rules     = [
        'user_first_name'       => ['required'],
        'user_email' 		    => ['required'],
        'user_sur_name'         => ['required'],
    ];
                  
        $messages = [
        'user_first_name.required' => 'You must at least give a value for your user_first_name.',
        'user_email.required'       => 'You must at least give a value for your user email status',
        'user_sur_name.required'       => 'You must at least give a value for your user surname status',
    ];
        $validator = \Validator::make($inputArr, $rules, $messages);
        return $validator;
    }
}
