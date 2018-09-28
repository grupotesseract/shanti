<?php

namespace App\Repositories;

use App\Models\InfoEspaco;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InfoEspacoRepository
 * @package App\Repositories
 * @version September 27, 2018, 2:28 am BRT
 *
 * @method InfoEspaco findWithoutFail($id, $columns = ['*'])
 * @method InfoEspaco find($id, $columns = ['*'])
 * @method InfoEspaco first($columns = ['*'])
*/
class InfoEspacoRepository extends BaseRepository
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
        return InfoEspaco::class;
    }
}
