<?php

namespace App\Repositories;

use App\Models\BlocoDescricao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlocoDescricaoRepository
 * @package App\Repositories
 * @version June 4, 2018, 7:41 pm BRT
 *
 * @method BlocoDescricao findWithoutFail($id, $columns = ['*'])
 * @method BlocoDescricao find($id, $columns = ['*'])
 * @method BlocoDescricao first($columns = ['*'])
*/
class BlocoDescricaoRepository extends BaseRepository
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
        return BlocoDescricao::class;
    }
}
