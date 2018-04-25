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

    /**
     * Retorna os Profissionais ativos.
     *
     * @return void
     */
    public function getAtivos()
    {
        return Profissional::ativos()->get();
    }

    /**
     * Ativa a profissional para que passe a ser retornado via API.
     *
     * @return void
     */
    public function ativaProfissional(Profissional $profissional)
    {
        return $profissional->update([
            'ativo_listagem' => true,
        ]);
    }

    /**
     * Desativa a profissional para que passe a ser retornada via API.
     *
     * @return void
     */
    public function desativaProfissional(Profissional $profissional)
    {
        return $profissional->update([
            'ativo_listagem' => false,
        ]);
    }
}
