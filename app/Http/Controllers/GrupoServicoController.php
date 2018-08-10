<?php

namespace App\Http\Controllers;

use App\DataTables\GrupoServicoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGrupoServicoRequest;
use App\Http\Requests\UpdateGrupoServicoRequest;
use App\Repositories\GrupoServicoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class GrupoServicoController extends AppBaseController
{
    /** @var  GrupoServicoRepository */
    private $grupoServicoRepository;

    public function __construct(GrupoServicoRepository $grupoServicoRepo)
    {
        $this->grupoServicoRepository = $grupoServicoRepo;
    }

    /**
     * Display a listing of the GrupoServico.
     *
     * @param GrupoServicoDataTable $grupoServicoDataTable
     * @return Response
     */
    public function index(GrupoServicoDataTable $grupoServicoDataTable)
    {
        return $grupoServicoDataTable->render('grupo_servicos.index');
    }

    /**
     * Show the form for creating a new GrupoServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_servicos.create');
    }

    /**
     * Store a newly created GrupoServico in storage.
     *
     * @param CreateGrupoServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoServicoRequest $request)
    {
        $input = $request->all();

        $grupoServico = $this->grupoServicoRepository->create($input);

        Flash::success('Grupo Servico saved successfully.');

        return redirect(route('grupoServicos.index'));
    }

    /**
     * Display the specified GrupoServico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoServico = $this->grupoServicoRepository->findWithoutFail($id);

        if (empty($grupoServico)) {
            Flash::error('Grupo Servico not found');

            return redirect(route('grupoServicos.index'));
        }

        return view('grupo_servicos.show')->with('grupoServico', $grupoServico);
    }

    /**
     * Show the form for editing the specified GrupoServico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoServico = $this->grupoServicoRepository->findWithoutFail($id);

        if (empty($grupoServico)) {
            Flash::error('Grupo Servico not found');

            return redirect(route('grupoServicos.index'));
        }

        return view('grupo_servicos.edit')->with('grupoServico', $grupoServico);
    }

    /**
     * Update the specified GrupoServico in storage.
     *
     * @param  int              $id
     * @param UpdateGrupoServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoServicoRequest $request)
    {
        $grupoServico = $this->grupoServicoRepository->findWithoutFail($id);

        if (empty($grupoServico)) {
            Flash::error('Grupo Servico not found');

            return redirect(route('grupoServicos.index'));
        }

        $grupoServico = $this->grupoServicoRepository->update($request->all(), $id);

        Flash::success('Grupo Servico updated successfully.');

        return redirect(route('grupoServicos.index'));
    }

    /**
     * Remove the specified GrupoServico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoServico = $this->grupoServicoRepository->findWithoutFail($id);

        if (empty($grupoServico)) {
            Flash::error('Grupo Servico not found');

            return redirect(route('grupoServicos.index'));
        }

        $this->grupoServicoRepository->delete($id);

        Flash::success('Grupo Servico deleted successfully.');

        return redirect(route('grupoServicos.index'));
    }
}
