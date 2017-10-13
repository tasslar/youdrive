<?php

namespace App\Models;p;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterRoles extends Model
{
     use softDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table     = 'master_roles';
    /**
     * The validation rules
     *
     * @var array $rules
     */
    protected $rules = [
        'role_name' => ['required'],
        'deleted_at'  => ['required'],
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array $dates
     */
    public $dates = ['deleted_at'];

    /**
     * The validation error messages.
     *
     * @var array $messages
     */
    protected $messages = [];

    protected $fillable  = [
        'role_name',
        'deleted_at',
    ];
}
