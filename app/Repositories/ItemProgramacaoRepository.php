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

    /**
     * Retorna os  ativos.
     *
     * @return void
     */
    public function getAtivos()
    {
        return ItemProgramacao::ativos()->orderByRaw('RANDOM()')->get();
    }

    /**
     * Ativa a exibição desse itemProgramacao para que passe a ser retornado via API.
     *
     * @return void
     */
    public function ativaTrabalho(ItemProgramacao $itemProgramacao)
    {
        return $itemProgramacao->update([
            'ativo_listagem' => true,
        ]);
    }

    /**
     * Desativa a exibicao desse itemProgramacao para que passe a ser retornada via API.
     *
     * @return void
     */
    public function desativaTrabalho(ItemProgramacao $itemProgramacao)
    {
        return $itemProgramacao->update([
            'ativo_listagem' => false,
        ]);
    }
}
