<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Repositories\FotoRepository;
use App\DataTables\ProfissionalDataTable;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProfissionalRepository;
use App\Http\Requests\CreateProfissionalRequest;
use App\Http\Requests\UpdateProfissionalRequest;

class ProfissionalController extends AppBaseController
{
    /** @var  ProfissionalRepository */
    private $profissionalRepository;
    private $fotoRepository;

    public function __construct(ProfissionalRepository $profissionalRepo, FotoRepository $fotoRepo)
    {
        $this->fotoRepository = $fotoRepo;
        $this->profissionalRepository = $profissionalRepo;
    }

    /**
     * Display a listing of the Profissional.
     *
     * @param ProfissionalDataTable $profissionalDataTable
     * @return Response
     */
    public function index(ProfissionalDataTable $profissionalDataTable)
    {
        return $profissionalDataTable->render('profissionals.index');
    }

    /**
     * Show the form for creating a new Profissional.
     *
     * @return Response
     */
    public function create()
    {
        return view('profissionals.create');
    }

    /**
     * Store a newly created Profissional in storage.
     *
     * @param CreateProfissionalRequest $request
     *
     * @return Response
     */
    public function store(CreateProfissionalRequest $request)
    {
        $input = $request->all();

        $profissional = $this->profissionalRepository->create($input);

        if ($request->file) {
            $foto = $this->fotoRepository->uploadAndCreate($request);
            $profissional->fotoListagem()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_profissional_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }
        
        Flash::success('Profissional cadastrado com sucesso.');
        return redirect(route('profissionals.show', $profissional->id));
    }

    /**
     * Display the specified Profissional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');

            return redirect(route('profissionals.index'));
        }

        return view('profissionals.show')->with('profissional', $profissional);
    }

    /**
     * Show the form for editing the specified Profissional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');

            return redirect(route('profissionals.index'));
        }

        return view('profissionals.edit')->with('profissional', $profissional);
    }

    /**
     * Update the specified Profissional in storage.
     *
     * @param  int              $id
     * @param UpdateProfissionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfissionalRequest $request)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');

            return redirect(route('profissionals.index'));
        }

        $profissional = $this->profissionalRepository->update($request->all(), $id);

        Flash::success('Profissional updated successfully.');

        return redirect(route('profissionals.index'));
    }

    /**
     * Remove the specified Profissional from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $this->profissionalRepository->delete($id);

        Flash::success('Profissional removido com sucesso .');

        return redirect(route('profissionals.index'));
    }
}