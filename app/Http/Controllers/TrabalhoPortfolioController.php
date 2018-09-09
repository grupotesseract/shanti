<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Http\Requests\FotoRequest;
use App\Repositories\FotoRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BlocoDescricaoRepository;
use App\DataTables\TrabalhoPortfolioDataTable;
use App\Repositories\TrabalhoPortfolioRepository;
use App\Http\Requests\CreateTrabalhoPortfolioRequest;
use App\Http\Requests\UpdateTrabalhoPortfolioRequest;

class TrabalhoPortfolioController extends AppBaseController
{
    /** @var  TrabalhoPortfolioRepository */
    private $trabalhoPortfolioRepository;
    private $fotoRepository;
    private $blocoRepository;

    /**
     * Construtor recebendo repos necessarios (comofaz identação com tantos repos?)
     *
     * @param TrabalhoPortfolioRepository $trabalhoPortfolioRepo
     * @param FotoRepository $fotoRepo
     * @param BlocoDescricaoRepository $blocoRepo
     */
    public function __construct(TrabalhoPortfolioRepository $trabalhoPortfolioRepo, 
        FotoRepository $fotoRepo, 
        BlocoDescricaoRepository $blocoRepo)
    {
        $this->trabalhoPortfolioRepository = $trabalhoPortfolioRepo;
        $this->fotoRepository = $fotoRepo;
        $this->blocoRepository = $blocoRepo;

    }

    /**
     * Display a listing of the TrabalhoPortfolio.
     *
     * @param TrabalhoPortfolioDataTable $trabalhoPortfolioDataTable
     * @return Response
     */
    public function index(TrabalhoPortfolioDataTable $trabalhoPortfolioDataTable)
    {
        return $trabalhoPortfolioDataTable->render('trabalho_portfolios.index');
    }

    /**
     * Show the form for creating a new TrabalhoPortfolio.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabalho_portfolios.create');
    }

    /**
     * Store a newly created TrabalhoPortfolio in storage.
     *
     * @param CreateTrabalhoPortfolioRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabalhoPortfolioRequest $request)
    {
        $input = $request->all();

        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->create($input);

        if ($request->file) {
            $foto = $this->fotoRepository->uploadAndCreate($request);
            $trabalhoPortfolio->fotoListagem()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_trabalhoPortfolio_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Trabalho salvo com sucesso.');
        return redirect('/trabalhoPortfolios/'.$trabalhoPortfolio->id.'/edit');
    }

    /**
     * Display the specified TrabalhoPortfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado!');

            return redirect(route('trabalhoPortfolios.index'));
        }

        return view('trabalho_portfolios.show')->with('trabalhoPortfolio', $trabalhoPortfolio);
    }

    /**
     * Show the form for editing the specified TrabalhoPortfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado!');

            return redirect(route('trabalhoPortfolios.index'));
        }

        return view('trabalho_portfolios.edit')->with('trabalhoPortfolio', $trabalhoPortfolio);
    }

    /**
     * Update the specified TrabalhoPortfolio in storage.
     *
     * @param  int              $id
     * @param UpdateTrabalhoPortfolioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabalhoPortfolioRequest $request)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado!');
            return redirect(route('trabalhoPortfolios.index'));
        }

        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->update($request->all(), $id);

        if ($request->file) {
            if ($trabalhoPortfolio->fotoListagem()->first()) {
                $trabalhoPortfolio->fotoListagem()->first()->delete();
            }

            $foto = $this->fotoRepository->uploadAndCreate($request);
            $trabalhoPortfolio->fotoListagem()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_trabalhoPortfolio_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Trabalho atualizado com sucesso.');

        return redirect(route('trabalhoPortfolios.index'));
    }

    /**
     * Remove the specified TrabalhoPortfolio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado!');

            return redirect(route('trabalhoPortfolios.index'));
        }

        $this->trabalhoPortfolioRepository->delete($id);

        Flash::success('Trabalho removido com sucesso.');

        return redirect(route('trabalhoPortfolios.index'));
    }

    /**
     * Metodo que recebe o POST de ativar a exibição desse trabalhoPortfolio em /quem-somos
     *
     * @param mixed $id
     */
    public function postAtivaListagem($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado');

            return redirect(route('trabalhoPortfolios.index'));
        }

        $retorno = $this->trabalhoPortfolioRepository->ativaTrabalho($trabalhoPortfolio);
        Flash::success('Trabalho ativado com sucesso.');

        return redirect()->back();
    }

    /**
     * Metodo que recebe o POST de desativar a exibição dessa trabalhoPortfolio em /quem-somos.
     *
     * @param mixed $id
     */
    public function postRemoveListagem($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado');

            return redirect(route('trabalhoPortfolios.index'));
        }

        $retorno = $this->trabalhoPortfolioRepository->desativaTrabalho($trabalhoPortfolio);
        Flash::success('Trabalho desativado com sucesso.');

        return redirect()->back();
    }

    /**
     * Mostra a view de criacao de um novo BlocoDescricao, de acordo com o tipo.
     *
     * Conta com o parametro 'tipo' na request
     *
     * @param mixed $id - TrabalhoPortfolio
     */
    public function getCreateBlocoConteudo($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado');
            return redirect(route('trabalhoPortfolios.index'));
        }

        //Pegando a view de create do bloco de conteudo de acordo com o tipo e passando quem sera o 'owner'
        $formulario = $this->blocoRepository->getViewFormularioPeloTipo(\Request::get('tipo'), $trabalhoPortfolio);

        return view('bloco_descricaos.partials.create-bloco-conteudo')
            ->with('formulario', $formulario);

    }

    /**
     * Mostra a view de edição de um BlocoDescricao, de acordo com o tipo.
     *
     * Conta com o parametro 'tipo' na request
     *
     * @param mixed $id - trabalhoPortfolio
     */
    public function getEditBlocoConteudo($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado');
            return redirect(route('trabalhoPortfolios.index'));
        }

        $Bloco = $this->blocoRepository->findWithoutFail(\Request::get('idBloco'));
        $formulario = $this->blocoRepository->getViewFormularioPeloTipo(\Request::get('tipo'), $trabalhoPortfolio, $Bloco);

        return view('bloco_descricaos.partials.edit-bloco-conteudo')
            ->with('formulario', $formulario);

    }


    /**
     * Metodo para exibir a pagina interna de um trabalho do portfolio
     *
     * @return void
     */
    public function getShowPortfolio($id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado');
            return redirect(route('trabalhoPortfolios.index'));
        }

        return view('pages.portfolio-interno')->with(["trabalhoPortfolio" => $trabalhoPortfolio]);
    }
    


    /**
     * undocumented function
     *
     * @return void
     */
    public function postTrocaFotoCapa(FotoRequest $request, $id)
    {
        $trabalhoPortfolio = $this->trabalhoPortfolioRepository->findWithoutFail($id);

        if (empty($trabalhoPortfolio)) {
            Flash::error('Trabalho não encontrado!');
            return redirect(route('trabalhoPortfolios.index'));
        }

        if ($request->file) {

            if ($trabalhoPortfolio->fotoCapa()->first()) {
                $trabalhoPortfolio->fotoCapa()->first()->delete();
            }

            $request->request->add(['tipo' => \App\Models\Foto::TIPO_CAPA]);
            $foto = $this->fotoRepository->uploadAndCreate($request);
            $trabalhoPortfolio->fotoCapa()->save($foto);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_trabalhoPortfolio_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto de capa atualizada com sucesso.');

        return redirect()->back();
    }
    
}
