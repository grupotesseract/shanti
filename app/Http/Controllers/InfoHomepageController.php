<?php

namespace App\Http\Controllers;

use App\Repositories\InfoHomepageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InfoHomepageController extends AppBaseController
{
    /** @var  InfoHomepageRepository */
    private $infoHomepageRepository;

    public function __construct(InfoHomepageRepository $infoHomepageRepo)
    {
        $this->infoHomepageRepository = $infoHomepageRepo;
    }

    /**
     * Display a listing of the InfoHomepage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->infoHomepageRepository->pushCriteria(new RequestCriteria($request));
        $infoHomepage = $this->infoHomepageRepository->all()->first();

        return view('info_homepages.index')
            ->with('infoHomepage', $infoHomepage);
    }

    /**
     * Show the form for creating a new InfoHomepage.
     *
     * @return Response
     */
    public function create()
    {
        return view('info_homepages.create');
    }

    /**
     * Update the specified InfoHomepage in storage.
     *
     * @param  int              $id
     * @param UpdateInfoHomepageRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $infoHomepage = $this->infoHomepageRepository->findWithoutFail($id);

        if (empty($infoHomepage)) {
            Flash::error('Informações da Home não encontradas!');
            return redirect()->back();
        }

        $infoHomepage = $this->infoHomepageRepository->update($request->all(), $id);

        Flash::success('Informações da Home atualizadas com sucesso!');
        return redirect('/informacoes-homepage');
    }

}
