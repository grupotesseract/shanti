<?php

namespace App\Repositories;

use App\Models\Artigo;
use InfyOm\Generator\Common\BaseRepository;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Traz todos os artigos pra essa tag
     * @param  string $tag Tag a ser buscada
     * @return Collection      Artigos dessa tag
     */
    public function withAllTags($tag)
    {
        return Artigo::withAllTags($tag)->get();
    }
    
    /**
     * Metodo para fazer o download de 1 Artigo
     * @param mixed $id
     */
    public function downloadArtigo($id)
    {
        $artigo = Artigo::find($id);
        preg_match("/\..*$/", $artigo->arquivo, $extensao);
        $filename = str_slug($artigo->nome).$extensao[0];
        return Storage::download($artigo->arquivo, $filename);
    }
}
