<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlocoDescricaoRequest;
use App\Http\Requests\UpdateBlocoDescricaoRequest;
use App\Repositories\BlocoDescricaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BlocoDescricaoController extends AppBaseController
{
    /** @var  BlocoDescricaoRepository */
    private $blocoDescricaoRepository;

    public function __construct(BlocoDescricaoRepository $blocoDescricaoRepo)
    {
        $this->blocoDescricaoRepository = $blocoDescricaoRepo;
    }

    /**
     * Display a listing of the BlocoDescricao.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->blocoDescricaoRepository->pushCriteria(new RequestCriteria($request));
        $blocoDescricaos = $this->blocoDescricaoRepository->all();

        return view('bloco_descricaos.index')
            ->with('blocoDescricaos', $blocoDescricaos);
    }

    /**
     * Show the form for creating a new BlocoDescricao.
     *
     * @return Response
     */
    public function create()
    {
        return view('bloco_descricaos.create');
    }

    /**
     * Store a newly created BlocoDescricao in storage.
     *
     * @param CreateBlocoDescricaoRequest $request
     *
     * @return Response
     */
    public function store(CreateBlocoDescricaoRequest $request)
    {
        $inputs = $this->blocoDescricaoRepository->preparaRequestParaProcessar($request);
        $blocoDescricao = $this->blocoDescricaoRepository->create($inputs);

        if (!$blocoDescricao) {
            Flash::error('Erro na criação do bloco de descricao');
            return redirect()->back();
        }

        Flash::success('Conteudo adicionado com sucesso!');

        $urlRedirect = route($blocoDescricao->owner::ROUTE_RESOURCE.'.edit', $blocoDescricao->owner->id);
        return redirect($urlRedirect);
    }

    /**
     * Display the specified BlocoDescricao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blocoDescricao = $this->blocoDescricaoRepository->findWithoutFail($id);

        if (empty($blocoDescricao)) {
            Flash::error('Bloco não encontrado');

            return redirect(route('blocoDescricaos.index'));
        }

        return view('bloco_descricaos.show')->with('blocoDescricao', $blocoDescricao);
    }

    /**
     * Show the form for editing the specified BlocoDescricao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blocoDescricao = $this->blocoDescricaoRepository->findWithoutFail($id);

        if (empty($blocoDescricao)) {
            Flash::error('Bloco não encontrado');

            return redirect(route('blocoDescricaos.index'));
        }

        return view('bloco_descricaos.edit')->with('blocoDescricao', $blocoDescricao);
    }

    /**
     * Update the specified BlocoDescricao in storage.
     *
     * @param  int              $id
     * @param UpdateBlocoDescricaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlocoDescricaoRequest $request)
    {
        $inputs = $this->blocoDescricaoRepository->preparaRequestParaProcessar($request);
        $blocoDescricao = $this->blocoDescricaoRepository->findWithoutFail($id);

        if (empty($blocoDescricao)) {
            Flash::error('Bloco não encontrado');

            return redirect(route('blocoDescricaos.index'));
        }

        $blocoDescricao = $this->blocoDescricaoRepository->update($inputs, $id);

        Flash::success('Bloco atualizado com sucesso');

        $urlRedirect = route($blocoDescricao->owner::ROUTE_RESOURCE.'.edit', $blocoDescricao->owner->id);
        return redirect($urlRedirect);
    }

    /**
     * Remove the specified BlocoDescricao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blocoDescricao = $this->blocoDescricaoRepository->findWithoutFail($id);

        if (empty($blocoDescricao)) {
            Flash::error('Bloco não encontrado');
            return redirect(route('blocoDescricaos.index'));
        }

        $this->blocoDescricaoRepository->delete($id);
        Flash::success('Bloco removido com sucesso.');

        $urlRedirect = route($blocoDescricao->owner::ROUTE_RESOURCE.'.edit', $blocoDescricao->owner->id);

        return redirect($urlRedirect);
    }

    /**
     * Metodo para alterar a ordem de 2 blocos de 1 owner
     *
     * A request deve vir com o parametro 'variacao' (1 || -1) indicando se deve trocar de ordem p/ cima ou p/ baixo
     *
     * @param int $id - ID do bloco que sera movido ('para cima' ou 'para baixo' na ordem de exibicao)
     * @return array - Com o indice 'view' que contem a listagem dos blocos renderizados com a ordem nova.
     */
    public function getAlteraOrdem($id)
    {
        $blocoDescricao = $this->blocoDescricaoRepository->findWithoutFail($id);

        if (empty($blocoDescricao)) {
            Flash::error('Bloco não encontrado');
            return redirect()->back();
        }

        $variacao = \Request::get('variacao');
        $novaOrdem = 0;

        //Se tiver uma variacao positiva, está aumentando a ordem, portanto trocar de lugar com o primeiro de ordem maior
        if ($variacao > 0) {
            $proximoBloco = $blocoDescricao
                ->owner
                ->blocosOrdenados
                ->where('ordem', '>', $blocoDescricao->ordem)
                ->first();
            $novaOrdem = $proximoBloco->ordem;
        }

        //Se tiver uma variacao negativa, está diminuindo a ordem, portanto trocar de lugar com o primeiro de ordem menor 
        else {
            $proximoBloco = $blocoDescricao
                ->owner
                ->blocosOrdenados
                ->where('ordem', '<', $blocoDescricao->ordem)
                ->reverse()
                ->first();
            $novaOrdem = $proximoBloco->ordem;
        
        }

        $proximoBloco->update([
            'ordem' => $blocoDescricao->ordem
        ]);

        $blocoDescricao->update([
            'ordem' => $novaOrdem
        ]);

        $view = view('bloco_descricaos.partials.listagem-blocos-descricao')
            ->with('owner', $blocoDescricao->owner)
            ->render();

        return ['view' => $view];
    }
    



}
