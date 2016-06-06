<?php

namespace App\Repositories;

use App\Models\UserRolProduct;
use InfyOm\Generator\Common\BaseRepository;

class UserRolProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'rol_id',
        'product_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserRolProduct::class;
    }
}
