<?php

namespace App\Repositories\Employees;

use Modules\Employees\Models\Teams;
use InfyOm\Generator\Common\BaseRepository;

class TeamsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'status',
        'team_lead',
        'assign_alert',
        'admin_notes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teams::class;
    }
}
