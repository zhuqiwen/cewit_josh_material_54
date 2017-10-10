<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class CtStudent extends Model
{
    use SoftDeletes;

    public $table = 'ct_students';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'contact_id',
        'school',
        'academic_career',
        'academic_standing',
        'ethnicity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'contact_id' => 'integer',
        'school' => 'string',
        'academic_career' => 'string',
        'academic_standing' => 'string',
        'ethnicity' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'contact_id' => 'required'
    ];


    /**
     * Relationships
     */

    public function contact()
    {
        return $this->belongsTo('App\Models\CtContact', 'contact_id');
    }
}
