<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArtigoRequest;
use App\Http\Requests\UpdateArtigoRequest;
use App\Repositories\ArtigoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
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
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->artigoRepository->pushCriteria(new RequestCriteria($request));
        $artigos = $this->artigoRepository->all();

        return view('artigos.index')
            ->with('artigos', $artigos);
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

        $artigo = $this->artigoRepository->create($input);

        Flash::success('Artigo saved successfully.');

        return redirect(route('artigos.index'));
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
            Flash::error('Artigo not found');

            return redirect(route('artigos.index'));
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
            Flash::error('Artigo not found');

            return redirect(route('artigos.index'));
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
            Flash::error('Artigo not found');

            return redirect(route('artigos.index'));
        }

        $artigo = $this->artigoRepository->update($request->all(), $id);

        Flash::success('Artigo updated successfully.');

        return redirect(route('artigos.index'));
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
            Flash::error('Artigo not found');

            return redirect(route('artigos.index'));
        }

        $this->artigoRepository->delete($id);

        Flash::success('Artigo deleted successfully.');

        return redirect(route('artigos.index'));
    }
}
