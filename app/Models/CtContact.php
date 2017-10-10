<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class CtContact extends Model
{
    use SoftDeletes;

    public $table = 'ct_contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'iu_user',
        'email',
        'is_test',
        'join_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'iu_user' => 'string',
        'email' => 'string',
        'join_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'email'
    ];



    /**
     * Relationships
     */

    public function student()
    {
        return $this->hasOne('App\Models\CtStudent', 'contact_id');
    }
}
