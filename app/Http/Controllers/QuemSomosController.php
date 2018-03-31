<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd('rota da pagina /quem-somos', $request);
        return view('quem-somos.index');     
    }
    
}
