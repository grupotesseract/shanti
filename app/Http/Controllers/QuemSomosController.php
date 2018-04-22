<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProfissionalRepository;

class QuemSomosController extends Controller
{
    private $profRepository;

    /**
     * @param mixed ProfissionalRepository $profRepository
     */
    public function __construct(ProfissionalRepository $profRepository)
    { 
        $this->profRepository = $profRepository;
    }
    

    /**
     * Mostra a pagina do Quem somos com os Profissionais
     *
     * @param Request $request
     */
    public function getIndex(Request $request)
    {
        $profissionais = $this->profRepository->getAtivos();

        return view('pages.quem-somos')->with([
            'profissionais' => $profissionais
        ]);     
    }
    
}
