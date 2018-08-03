<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Repositories\FotoRepository;
use App\DataTables\ProfissionalDataTable;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProfissionalRepository;
use App\Repositories\BlocoDescricaoRepository;
use App\Http\Requests\CreateProfissionalRequest;
use App\Http\Requests\UpdateProfissionalRequest;
use App\Http\Requests\CreateBlocoDescricaoRequest;

class ProfissionalController extends AppBaseController
{
    /** @var  ProfissionalRepository */
    private $profissionalRepository;
    private $fotoRepository;
    private $blocoRepository;

    public function __construct(ProfissionalRepository $profissionalRepo, FotoRepository $fotoRepo, BlocoDescricaoRepository $blocoRepo)
    {
        $this->fotoRepository = $fotoRepo;
        $this->profissionalRepository = $profissionalRepo;
        $this->blocoRepository = $blocoRepo;
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
    public function getEditPaginaInterna($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');
            return redirect(route('profissionals.index'));
        }

        return view('profissionals.partials.edit-interna')->with('profissional', $profissional);
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

        if ($request->file) {
            $profissional->fotoListagem()->delete();

            $foto = $this->fotoRepository->uploadAndCreate($request);
            $profissional->fotoListagem()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_profissional_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

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

    /**
     * Metodo que recebe o POST de ativar a exibição desse profissional em /quem-somos
     *
     * @param mixed $id
     */
    public function postAtivaListagem($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $retorno = $this->profissionalRepository->ativaProfissional($profissional);
        Flash::success('Profissional ativado com sucesso.');

        return redirect()->back();
    }

    /**
     * Metodo que recebe o POST de desativar a exibição dessa profissional em /quem-somos.
     *
     * @param mixed $id
     */
    public function postRemoveListagem($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $retorno = $this->profissionalRepository->desativaProfissional($profissional);
        Flash::success('Profissional desativado com sucesso.');

        return redirect()->back();
    }


    /**
     * Mostra a view de criacao de um novo BlocoDescricao, de acordo com o tipo.
     *
     * Conta com o parametro 'tipo' na request
     *
     * @param mixed $id - Profissional
     */
    public function getCreateBlocoConteudo($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');
            return redirect(route('profissionals.index'));
        }

        $formulario = $this->blocoRepository->getViewFormularioPeloTipo(\Request::get('tipo'), $profissional->id);

        return view('profissionals.partials.create-bloco-conteudo')
            ->with('formulario', $formulario);

    }

    /**
     * Mostra a view de edição de um BlocoDescricao, de acordo com o tipo.
     *
     * Conta com o parametro 'tipo' na request
     *
     * @param mixed $id - Profissional
     */
    public function getEditBlocoConteudo($id)
    {
        $profissional = $this->profissionalRepository->findWithoutFail($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');
            return redirect(route('profissionals.index'));
        }

        $Bloco = $this->blocoRepository->findWithoutFail(\Request::get('idBloco'));
        $formulario = $this->blocoRepository->getViewFormularioPeloTipo(\Request::get('tipo'), $profissional->id, $Bloco);

        return view('profissionals.partials.edit-bloco-conteudo')
            ->with('formulario', $formulario);

    }

}
