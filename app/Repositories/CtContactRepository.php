<?php

namespace App\Repositories;

use App\Models\CtContact;
use InfyOm\Generator\Common\BaseRepository;

class CtContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'gender',
        'iu_user',
        'email',
        'is_test',
        'join_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CtContact::class;
    }
}
