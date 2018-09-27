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
        $infoEspacos = $this->infoEspacoRepository->all();

        return view('info_espacos.index')
            ->with('infoEspacos', $infoEspacos);
    }

    /**
     * Show the form for creating a new InfoEspaco.
     *
     * @return Response
     */
    public function create()
    {
        return view('info_espacos.create');
    }

    /**
     * Store a newly created InfoEspaco in storage.
     *
     * @param CreateInfoEspacoRequest $request
     *
     * @return Response
     */
    public function store(CreateInfoEspacoRequest $request)
    {
        $input = $request->all();

        $infoEspaco = $this->infoEspacoRepository->create($input);

        Flash::success('Info Espaco saved successfully.');

        return redirect(route('infoEspacos.index'));
    }

    /**
     * Display the specified InfoEspaco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infoEspaco = $this->infoEspacoRepository->findWithoutFail($id);

        if (empty($infoEspaco)) {
            Flash::error('Info Espaco not found');

            return redirect(route('infoEspacos.index'));
        }

        return view('info_espacos.show')->with('infoEspaco', $infoEspaco);
    }

    /**
     * Show the form for editing the specified InfoEspaco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infoEspaco = $this->infoEspacoRepository->findWithoutFail($id);

        if (empty($infoEspaco)) {
            Flash::error('Info Espaco not found');

            return redirect(route('infoEspacos.index'));
        }

        return view('info_espacos.edit')->with('infoEspaco', $infoEspaco);
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
            Flash::error('Info Espaco not found');

            return redirect(route('infoEspacos.index'));
        }

        $infoEspaco = $this->infoEspacoRepository->update($request->all(), $id);

        Flash::success('Info Espaco updated successfully.');

        return redirect(route('infoEspacos.index'));
    }

    /**
     * Remove the specified InfoEspaco from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $infoEspaco = $this->infoEspacoRepository->findWithoutFail($id);

        if (empty($infoEspaco)) {
            Flash::error('Info Espaco not found');

            return redirect(route('infoEspacos.index'));
        }

        $this->infoEspacoRepository->delete($id);

        Flash::success('Info Espaco deleted successfully.');

        return redirect(route('infoEspacos.index'));
    }
}
