<?php

namespace App\Repositories;

use App\Models\TrabalhoPortfolio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabalhoPortfolioRepository
 * @package App\Repositories
 * @version September 7, 2018, 9:11 pm BRT
 *
 * @method TrabalhoPortfolio findWithoutFail($id, $columns = ['*'])
 * @method TrabalhoPortfolio find($id, $columns = ['*'])
 * @method TrabalhoPortfolio first($columns = ['*'])
*/
class TrabalhoPortfolioRepository extends BaseRepository
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
        return TrabalhoPortfolio::class;
    }

    /**
     * Retorna os Trabalhos ativos.
     *
     * @return void
     */
    public function getAtivos()
    {
        return TrabalhoPortfolio::ativos()->orderByRaw('RANDOM()')->get();
    }

    /**
     * Ativa a exibição desse trabalhoPortfolio para que passe a ser retornado via API.
     *
     * @return void
     */
    public function ativaTrabalho(TrabalhoPortfolio $trabalhoPortfolio)
    {
        return $trabalhoPortfolio->update([
            'ativo_listagem' => true,
        ]);
    }

    /**
     * Desativa a exibicao desse trabalhoPortfolio para que passe a ser retornada via API.
     *
     * @return void
     */
    public function desativaTrabalho(TrabalhoPortfolio $trabalhoPortfolio)
    {
        return $trabalhoPortfolio->update([
            'ativo_listagem' => false,
        ]);
    }
}
