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
    public function getViewFormularioPeloTipo($tipo, $profissionalId,  $blocosDescricao=null)
    {
        $view = view('bloco_descricaos.partials.formulario-'.strtoupper($tipo))
            ->with('profissionalId', $profissionalId)
            ->with('tipo', $tipo);

        if ($blocosDescricao) {
            $view = $view->with('blocosDescricao', $blocosDescricao);
        }
            
        return $view;
    }
    

    /**
     * undocumented function
     *
     * @return void
     */
    public function preparaRequestParaProcessar($request)
    {
        $retorno = array();

        // Se for um bloco do tipo texto, o json deve ter a propriedade 'texto'
        if ($this->requestTipoIgualA($request, BlocoDescricao::TIPO_TEXTO)) {

            //Adicionando o campo necessario na request
            $request->request->add([
                'json_conteudo' => ['texto' => $request->texto]
            ]);

            $retorno = $request->all();
            unset($retorno['texto']);
        }

        // Se for um bloco do tipo citação, o json deve ter a propriedade 'texto' e 'autor'
        if ($this->requestTipoIgualA($request, BlocoDescricao::TIPO_CITACAO)) {

            //Adicionando o campo necessario na request
            $request->request->add([
                'json_conteudo' => [
                    'texto' => $request->texto,
                    'autor' => $request->autor
                ]
            ]);

            $retorno = $request->all();
            unset($retorno['texto']);
            unset($retorno['autor']);
        }

        // Se for um bloco do tipo imagem, precisamos fazer o upload da imagem pro cloudinary
        if ($this->requestTipoIgualA($request, BlocoDescricao::TIPO_IMAGEM)) {
            $foto = $this->fotoRepository->uploadAndCreate($request);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_profissional_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }


        return $retorno;

    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function requestTipoIgualA($request, int $tipo)
    {
        return (array_search(strtoupper($request->tipo), BlocoDescricao::TIPOS) == $tipo);
    }
}
