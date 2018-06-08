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
        $input = $request->all();

        $blocoDescricao = $this->blocoDescricaoRepository->create($input);

        Flash::success('Bloco Descricao saved successfully.');

        return redirect(route('blocoDescricaos.index'));
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
            Flash::error('Bloco Descricao not found');

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
            Flash::error('Bloco Descricao not found');

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
        $blocoDescricao = $this->blocoDescricaoRepository->findWithoutFail($id);

        if (empty($blocoDescricao)) {
            Flash::error('Bloco Descricao not found');

            return redirect(route('blocoDescricaos.index'));
        }

        $blocoDescricao = $this->blocoDescricaoRepository->update($request->all(), $id);

        Flash::success('Bloco Descricao updated successfully.');

        return redirect(route('blocoDescricaos.index'));
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
            Flash::error('Bloco Descricao not found');

            return redirect(route('blocoDescricaos.index'));
        }

        $this->blocoDescricaoRepository->delete($id);

        Flash::success('Bloco Descricao deleted successfully.');

        return redirect(route('blocoDescricaos.index'));
    }
}
