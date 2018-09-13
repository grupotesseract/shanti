<?php

namespace App\Http\Controllers;

use App\DataTables\ItemProgramacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateItemProgramacaoRequest;
use App\Http\Requests\UpdateItemProgramacaoRequest;
use App\Repositories\ItemProgramacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ItemProgramacaoController extends AppBaseController
{
    /** @var  ItemProgramacaoRepository */
    private $itemProgramacaoRepository;

    public function __construct(ItemProgramacaoRepository $itemProgramacaoRepo)
    {
        $this->itemProgramacaoRepository = $itemProgramacaoRepo;
    }

    /**
     * Display a listing of the ItemProgramacao.
     *
     * @param ItemProgramacaoDataTable $itemProgramacaoDataTable
     * @return Response
     */
    public function index(ItemProgramacaoDataTable $itemProgramacaoDataTable)
    {
        return $itemProgramacaoDataTable->render('item_programacaos.index');
    }

    /**
     * Show the form for creating a new ItemProgramacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('item_programacaos.create');
    }

    /**
     * Store a newly created ItemProgramacao in storage.
     *
     * @param CreateItemProgramacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateItemProgramacaoRequest $request)
    {
        $input = $request->all();

        $itemProgramacao = $this->itemProgramacaoRepository->create($input);

        Flash::success('Item Programacao saved successfully.');

        return redirect(route('itemProgramacaos.index'));
    }

    /**
     * Display the specified ItemProgramacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Item Programacao not found');

            return redirect(route('itemProgramacaos.index'));
        }

        return view('item_programacaos.show')->with('itemProgramacao', $itemProgramacao);
    }

    /**
     * Show the form for editing the specified ItemProgramacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Item Programacao not found');

            return redirect(route('itemProgramacaos.index'));
        }

        return view('item_programacaos.edit')->with('itemProgramacao', $itemProgramacao);
    }

    /**
     * Update the specified ItemProgramacao in storage.
     *
     * @param  int              $id
     * @param UpdateItemProgramacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemProgramacaoRequest $request)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Item Programacao not found');

            return redirect(route('itemProgramacaos.index'));
        }

        $itemProgramacao = $this->itemProgramacaoRepository->update($request->all(), $id);

        Flash::success('Item Programacao updated successfully.');

        return redirect(route('itemProgramacaos.index'));
    }

    /**
     * Remove the specified ItemProgramacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itemProgramacao = $this->itemProgramacaoRepository->findWithoutFail($id);

        if (empty($itemProgramacao)) {
            Flash::error('Item Programacao not found');

            return redirect(route('itemProgramacaos.index'));
        }

        $this->itemProgramacaoRepository->delete($id);

        Flash::success('Item Programacao deleted successfully.');

        return redirect(route('itemProgramacaos.index'));
    }
}
