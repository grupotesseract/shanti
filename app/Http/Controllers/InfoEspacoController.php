<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInfoEspacoRequest;
use App\Http\Requests\UpdateInfoEspacoRequest;
use App\Repositories\InfoEspacoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InfoEspacoController extends AppBaseController
{
    /** @var  InfoEspacoRepository */
    private $infoEspacoRepository;

    public function __construct(InfoEspacoRepository $infoEspacoRepo)
    {
        $this->infoEspacoRepository = $infoEspacoRepo;
    }

    /**
     * Display a listing of the InfoEspaco.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->infoEspacoRepository->pushCriteria(new RequestCriteria($request));
        $infoEspaco = $this->infoEspacoRepository->all()->first();

        return view('info_espacos.index')
            ->with('infoEspaco', $infoEspaco);
    }

    /**
     * Update the specified InfoEspaco in storage.
     *
     * @param  int              $id
     * @param UpdateInfoEspacoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInfoEspacoRequest $request)
    {
        $infoEspaco = $this->infoEspacoRepository->findWithoutFail($id);

        if (empty($infoEspaco)) {
            Flash::error('Informações não encontradas');
            return redirect(route('infoEspacos.index'));
        }

        $infoEspaco = $this->infoEspacoRepository->update($request->all(), $id);

        Flash::success('Informações da página Espaco atualizadas com sucesso.');

        return redirect(route('infoEspaco.index'));
    }


    /**
     * Metodo para servir a pagina O Espaco
     */
    public function getEspaco()
    {
        $infoEspaco = \App\Models\InfoEspaco::first();
        return view('pages.espaco')->with('infoEspaco', $infoEspaco);
    }
    

}
