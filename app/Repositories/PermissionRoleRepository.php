<?php

namespace App\Repositories;

use App\Models\PermissionRole;
use InfyOm\Generator\Common\BaseRepository;

class PermissionRoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PermissionRole::class;
    }
}
