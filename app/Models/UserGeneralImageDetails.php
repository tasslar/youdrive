<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserGeneralImageDetails extends Model
{
    use softDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table     = 'user_general_image_details';

    public static function any_upload($file,$path)
    {   
        $extension  = $file->getClientOriginalExtension();
        $fileName   = rand(11111,99999).'.'.$extension;
        $result     = $file->move($path,$fileName);
        $filename   = $fileName;
        return $filename;
    }
}
