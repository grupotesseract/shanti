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

    
    /**
     * getProfissional 
     *
     * @param Request $request
     * @param mixed $id
     */
    public function getProfissional(Request $request, $id)
    {
        $profissional = $this->profRepository->findWithoutFail($id);

        if (empty($profissional)) {
            $profissional = $this->profRepository->findByField('url_amigavel', $id)->first();
        }

        if (empty($profissional)) {
            return redirect('/quem-somos');
        }

        return view('pages.quem-somos-pessoal')->with([
            'profissional' => $profissional
        ]);     
    }

    
}
