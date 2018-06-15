<?php

namespace App\Repositories;

use App\Models\Artigo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArtigoRepository
 * @package App\Repositories
 * @version June 15, 2018, 8:36 pm BRT
 *
 * @method Artigo findWithoutFail($id, $columns = ['*'])
 * @method Artigo find($id, $columns = ['*'])
 * @method Artigo first($columns = ['*'])
*/
class ArtigoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'arquivo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Artigo::class;
    }
}
