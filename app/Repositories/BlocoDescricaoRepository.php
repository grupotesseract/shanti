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
     * Metodo que retorna o formulario p/ create||update de acordo com o tipo do bloco.
     *
     * @param string $tipo - TIPO do bloco que determinará o HTML final.
     * @param Model $owner - owner do bloco, para as FK's
     * @param Model $blocosDescricao - o próprio BlocoDescricao caso esteja editando.
     */
    public function getViewFormularioPeloTipo($tipo, $owner,  $blocosDescricao=null)
    {
        $view = view('bloco_descricaos.partials.formulario-'.strtoupper($tipo))
            ->with('owner', $owner)
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

        // Se for um bloco do tipo lista, o json deve ter a propriedade 'titulo' e 'items'
        if ($this->requestTipoIgualA($request, BlocoDescricao::TIPO_LISTA)) {

            //Adicionando o campo necessario na request
            $request->request->add([
                'json_conteudo' => [
                    'titulo' => $request->titulo,
                    'items' => $request->items
                ]
            ]);

            $retorno = $request->all();
            unset($retorno['titulo']);
            unset($retorno['items']);
        }

        // Se for um bloco do tipo botao, o json deve ter a propriedade 'texto' e 'url'
        if ($this->requestTipoIgualA($request, BlocoDescricao::TIPO_BOTAO)) {

            //Adicionando o campo necessario na request
            $request->request->add([
                'json_conteudo' => [
                    'texto' => $request->texto,
                    'url' => $request->url
                ]
            ]);

            $retorno = $request->all();
            unset($retorno['texto']);
            unset($retorno['url']);
        }


        // Se for um bloco do tipo imagem, precisamos fazer o upload da imagem pro cloudinary
        if ($this->requestTipoIgualA($request, BlocoDescricao::TIPO_IMAGEM)) {
            
            $this->fotoRepository = new FotoRepository(app());
            $foto = $this->fotoRepository->uploadAndCreate($request);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_profissional_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);

            //Adicionando o campo necessario na request
            $request->request->add([
                'json_conteudo' => [
                    'src' => $foto->urlCloudinary,
                ]
            ]);

            $retorno = $request->all();
            unset($retorno['file']);

        }

        $retorno['ordem'] = $this->model->max('ordem')+1;

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
