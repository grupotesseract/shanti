<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInfoHomepageRequest;
use App\Http\Requests\UpdateInfoHomepageRequest;
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
        $infoHomepages = $this->infoHomepageRepository->all();

        return view('info_homepages.index')
            ->with('infoHomepages', $infoHomepages);
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
     * Store a newly created InfoHomepage in storage.
     *
     * @param CreateInfoHomepageRequest $request
     *
     * @return Response
     */
    public function store(CreateInfoHomepageRequest $request)
    {
        $input = $request->all();

        $infoHomepage = $this->infoHomepageRepository->create($input);

        Flash::success('Info Homepage saved successfully.');
        return redirect(route('infoHomepages.index'));
    }

    /**
     * Display the specified InfoHomepage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infoHomepage = $this->infoHomepageRepository->findWithoutFail($id);

        if (empty($infoHomepage)) {
            Flash::error('Info Homepage not found');
            return redirect(route('infoHomepages.index'));
        }

        return view('info_homepages.show')->with('infoHomepage', $infoHomepage);
    }

    /**
     * Show the form for editing the specified InfoHomepage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infoHomepage = $this->infoHomepageRepository->findWithoutFail($id);

        if (empty($infoHomepage)) {
            Flash::error('Info Homepage not found');
            return redirect(route('infoHomepages.index'));
        }

        return view('info_homepages.edit')->with('infoHomepage', $infoHomepage);
    }

    /**
     * Update the specified InfoHomepage in storage.
     *
     * @param  int              $id
     * @param UpdateInfoHomepageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInfoHomepageRequest $request)
    {
        $infoHomepage = $this->infoHomepageRepository->findWithoutFail($id);

        if (empty($infoHomepage)) {
            Flash::error('Info Homepage not found');
            return redirect(route('infoHomepages.index'));
        }

        $infoHomepage = $this->infoHomepageRepository->update($request->all(), $id);

        Flash::success('Info Homepage updated successfully.');
        return redirect(route('infoHomepages.index'));
    }

    /**
     * Remove the specified InfoHomepage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $infoHomepage = $this->infoHomepageRepository->findWithoutFail($id);

        if (empty($infoHomepage)) {
            Flash::error('Info Homepage not found');
            return redirect(route('infoHomepages.index'));
        }

        $this->infoHomepageRepository->delete($id);

        Flash::success('Info Homepage deleted successfully.');
        return redirect(route('infoHomepages.index'));
    }

}
