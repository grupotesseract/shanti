<?php

namespace App\Repositories;

use App\Models\GrupoServico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GrupoServicoRepository
 * @package App\Repositories
 * @version August 9, 2018, 9:47 pm -03
 *
 * @method GrupoServico findWithoutFail($id, $columns = ['*'])
 * @method GrupoServico find($id, $columns = ['*'])
 * @method GrupoServico first($columns = ['*'])
*/
class GrupoServicoRepository extends BaseRepository
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
        return GrupoServico::class;
    }
}
