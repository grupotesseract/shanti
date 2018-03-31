<?php

namespace App\Repositories;

use App\Models\Profissional;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProfissionalRepository
 * @package App\Repositories
 * @version March 30, 2018, 9:56 pm BRT
 *
 * @method Profissional findWithoutFail($id, $columns = ['*'])
 * @method Profissional find($id, $columns = ['*'])
 * @method Profissional first($columns = ['*'])
*/
class ProfissionalRepository extends BaseRepository
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
        return Profissional::class;
    }
}
