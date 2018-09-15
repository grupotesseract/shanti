<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Repositories\FotoRepository;
use App\Http\Controllers\AppBaseController;
use App\DataTables\ItemProgramacaoDataTable;
use App\Repositories\BlocoDescricaoRepository;
use App\Repositories\ItemProgramacaoRepository;
use App\Http\Requests\CreateItemProgramacaoRequest;
use App\Http\Requests\UpdateItemProgramacaoRequest;

class ItemProgramacaoController extends AppBaseController
{
    /** @var  ItemProgramacaoRepository */
    private $itemProgramacaoRepository;
    private $fotoRepository;
    private $blocoRepository;

    /**
     * Construtor recebendo repos necessarios (comofaz identação com tantos repos?)
     *
     * @param ItemProgramacaoRepository $itemProgramacaoRepo
     * @param FotoRepository $fotoRepo
     * @param BlocoDescricaoRepository $blocoRepo
     */
    public function __construct(FotoRepository $fotoRepo, 
        BlocoDescricaoRepository $blocoRepo,
        ItemProgramacaoRepository $itemProgramacaoRepo)
    {
        $this->itemProgramacaoRepository = $itemProgramacaoRepo;
        $this->fotoRepository = $fotoRepo;
        $this->blocoRepository = $blocoRepo;
    }

    /**
     * Display a listing of the ItemProgramacao.
     *
     * @param ItemProgramacaoDataTable $itemProgramacaoDataTable
     * @return Response
     */
    public function index(ItemProgramacaoDataTable $itemProgramacaoDataTable)
    {
        return $itemProgramacaoDataTable->render('item_programacaos.index');
    }

    /**
     * Show the form for creating a new ItemProgramacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('item_programacaos.create');
    }

    /**
     * Store a newly created ItemProgramacao in storage.
     *
     * @param CreateItemProgramacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateItemProgramacaoRequest $request)
    {
        $input = $request->all();

        $itemProgramacao = $this->itemProgramacaoRepository->create($input);

        if ($request->file) {
            unset($input['tipo']);
            $foto = $this->fotoRepository->uploadAndCreate($input);
            $itemProgramacao->fotoListagem()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_itemProgramacao_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Programação criada com sucesso.');
        return redirect(route('itemProgramacaos.index'));
    }

    /**
     * Display the specified ItemProgramacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');

            return redirect(route('itemProgramacaos.index'));
        }

        return view('item_programacaos.show')->with('itemProgramacao', $itemProgramacao);
    }

    /**
     * Show the form for editing the specified ItemProgramacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');

            return redirect(route('itemProgramacaos.index'));
        }

        return view('item_programacaos.edit')->with('itemProgramacao', $itemProgramacao);
    }

    /**
     * Update the specified ItemProgramacao in storage.
     *
     * @param  int              $id
     * @param UpdateItemProgramacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemProgramacaoRequest $request)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');
            return redirect(route('itemProgramacaos.index'));
        }

        $itemProgramacao = $this->itemProgramacaoRepository->update($request->all(), $id);

        if ($request->file) {
            if ($itemProgramacao->fotoListagem()->first()) {
                $itemProgramacao->fotoListagem()->first()->delete();
            }
            $input = $request->all();
            unset($input['tipo']);
            $foto = $this->fotoRepository->uploadAndCreate($input);
            $itemProgramacao->fotoListagem()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_itemProgramacao_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }


        Flash::success('Programação atualizada com sucesso.');
        return redirect(route('itemProgramacaos.index'));
    }

    /**
     * Remove the specified ItemProgramacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');

            return redirect(route('itemProgramacaos.index'));
        }

        $this->itemProgramacaoRepository->delete($id);

        Flash::success('Programação deleted successfully.');

        return redirect(route('itemProgramacaos.index'));
    }

    /**
     * Metodo que recebe o POST de ativar a exibição desse itemProgramacao em /quem-somos
     *
     * @param mixed $id
     */
    public function postAtivaListagem($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');

            return redirect(route('itemProgramacaos.index'));
        }

        $retorno = $this->itemProgramacaoRepository->ativaTrabalho($itemProgramacao);
        Flash::success('Trabalho ativado com sucesso.');

        return redirect()->back();
    }

    /**
     * Metodo que recebe o POST de desativar a exibição dessa itemProgramacao em /quem-somos.
     *
     * @param mixed $id
     */
    public function postRemoveListagem($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');

            return redirect(route('itemProgramacaos.index'));
        }

        $retorno = $this->itemProgramacaoRepository->desativaTrabalho($itemProgramacao);
        Flash::success('Trabalho desativado com sucesso.');

        return redirect()->back();
    }

    /**
     * Mostra a view de criacao de um novo BlocoDescricao, de acordo com o tipo.
     *
     * Conta com o parametro 'tipo' na request
     *
     * @param mixed $id - TrabalhoPortfolio
     */
    public function getCreateBlocoConteudo($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');
            return redirect(route('itemProgramacaos.index'));
        }

        //Pegando a view de create do bloco de conteudo de acordo com o tipo e passando quem sera o 'owner'
        $formulario = $this->blocoRepository->getViewFormularioPeloTipo(\Request::get('tipo'), $itemProgramacao);

        return view('bloco_descricaos.partials.create-bloco-conteudo')
            ->with('formulario', $formulario);

    }

    /**
     * Mostra a view de edição de um BlocoDescricao, de acordo com o tipo.
     *
     * Conta com o parametro 'tipo' na request
     *
     * @param mixed $id - itemProgramacao
     */
    public function getEditBlocoConteudo($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');
            return redirect(route('itemProgramacaos.index'));
        }

        $Bloco = $this->blocoRepository->findWithoutFail(\Request::get('idBloco'));
        $formulario = $this->blocoRepository->getViewFormularioPeloTipo(\Request::get('tipo'), $itemProgramacao, $Bloco);

        return view('bloco_descricaos.partials.edit-bloco-conteudo')
            ->with('formulario', $formulario);

    }


    /**
     * Metodo para exibir a pagina interna de um trabalho do portfolio
     *
     * @return void
     */
    public function getShowPortfolio($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada');
            return redirect(route('itemProgramacaos.index'));
        }

        return view('pages.portfolio-interno')->with(["itemProgramacao" => $itemProgramacao]);
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function postTrocaFotoCapa(FotoRequest $request, $id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Programação não encontrada!');
            return redirect(route('itemProgramacaos.index'));
        }

        if ($request->file) {
            if ($itemProgramacao->fotoCapa()->first()) {
                $itemProgramacao->fotoCapa()->first()->delete();
            }

            $request->request->add(['tipo' => \App\Models\Foto::TIPO_CAPA]);
            $foto = $this->fotoRepository->uploadAndCreate($request);
            $itemProgramacao->fotoCapa()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_itemProgramacao_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto de capa atualizada com sucesso.');
        return redirect()->back();
    }
    
}

