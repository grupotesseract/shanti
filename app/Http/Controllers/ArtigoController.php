<?php

namespace App\Http\Controllers;

use App\DataTables\ArtigoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateArtigoRequest;
use App\Http\Requests\UpdateArtigoRequest;
use App\Repositories\ArtigoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ArtigoController extends AppBaseController
{
    /** @var  ArtigoRepository */
    private $artigoRepository;

    public function __construct(ArtigoRepository $artigoRepo)
    {
        $this->artigoRepository = $artigoRepo;
    }

    /**
     * Display a listing of the Artigo.
     *
     * @param ArtigoDataTable $artigoDataTable
     * @return Response
     */
    public function index(ArtigoDataTable $artigoDataTable)
    {
        return $artigoDataTable->render('artigos.index');
    }

    /**
     * Show the form for creating a new Artigo.
     *
     * @return Response
     */
    public function create()
    {
        return view('artigos.create');
    }

    /**
     * Store a newly created Artigo in storage.
     *
     * @param CreateArtigoRequest $request
     *
     * @return Response
     */
    public function store(CreateArtigoRequest $request)
    {
        $input = $request->all();
        if ($input['tipo'] == \App\Models\Artigo::TIPO_ARQUIVO){
            $input['arquivo'] = $request->arquivo->store('artigos_artigos');
        }

        $artigo = $this->artigoRepository->create($input);
        $artigo->syncTags($input['tags']);
        
        Flash::success('Referência salva com sucesso.');
        return redirect(route('admin-artigos.index'));
    }

    /**
     * Display the specified Artigo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $artigo = $this->artigoRepository->findWithoutFail($id);

        if (empty($artigo)) {
            Flash::error('Artigo não encontrado');

            return redirect(route('admin-artigos.index'));
        }

        return view('artigos.show')->with('artigo', $artigo);
    }

    /**
     * Show the form for editing the specified Artigo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $artigo = $this->artigoRepository->findWithoutFail($id);

        if (empty($artigo)) {
            Flash::error('Artigo não encontrado');

            return redirect(route('admin-artigos.index'));
        }

        return view('artigos.edit')->with('artigo', $artigo);
    }

    /**
     * Update the specified Artigo in storage.
     *
     * @param  int              $id
     * @param UpdateArtigoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArtigoRequest $request)
    {
        $artigo = $this->artigoRepository->findWithoutFail($id);

        if (empty($artigo)) {
            Flash::error('Artigo não encontrado');

            return redirect(route('admin-artigos.index'));
        }

        $artigo = $this->artigoRepository->update($request->all(), $id);

        Flash::success('Artigo atualizado com sucesso.');

        return redirect(route('admin-artigos.index'));
    }

    /**
     * Remove the specified Artigo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $artigo = $this->artigoRepository->findWithoutFail($id);

        if (empty($artigo)) {
            Flash::error('Artigo não encontrado');

            return redirect(route('admin-artigos.index'));
        }

        $this->artigoRepository->delete($id);

        Flash::success('Artigo excluído com sucesso.');

        return redirect(route('admin-artigos.index'));
    }

    /**
     * Listagem de Artigos na Home
     * @param  string $tag Tag a ser mostrada
     * @return View      View com os Artigos filtrados
     */
    public function indexHome($tag)
    {
        $artigos = $tag === 'todos' ? $this->artigoRepository->all() : $this->artigoRepository->withAllTags(['#'.$tag]);

        return view('pages.artigos')->with('artigos', $artigos); 
    }

    /**
     * Metodo para receber a request de download do artigo
     *
     * @param mixed $id
     */
    public function downloadArtigo($id)
    {
        return $this->artigoRepository->downloadArtigo($id);
    }
}
