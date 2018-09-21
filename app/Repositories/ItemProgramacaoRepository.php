<?php

namespace App\Repositories;

use App\Models\ItemProgramacao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ItemProgramacaoRepository
 * @package App\Repositories
 * @version September 12, 2018, 10:46 pm BRT
 *
 * @method ItemProgramacao findWithoutFail($id, $columns = ['*'])
 * @method ItemProgramacao find($id, $columns = ['*'])
 * @method ItemProgramacao first($columns = ['*'])
*/
class ItemProgramacaoRepository extends BaseRepository
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
        return ItemProgramacao::class;
    }
}
