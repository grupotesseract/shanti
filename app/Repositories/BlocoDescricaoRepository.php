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

    /**
     * getFormPeloTipo 
     *
     * @param mixed $tipo
     * @param mixed $blocosDescricao
     */
    public function getFormPeloTipo($tipo, $blocosDescricao=null)
    {
        $view = view('bloco_descricaos.partials.formulario-'.$tipo);
        if ($blocosDescricao) {
            $view = $view->with('blocosDescricao');
        }
            
        return $view->render();
    }
    



}
