<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GrupoServicoRepository;

class ServicosController extends Controller
{
    private $grupoServRepo;

    /**
     * @param mixed GrupoServicoRepository $grupoServRepo
     */
    public function __construct(GrupoServicoRepository $grupoServRepo)
    { 
        $this->grupoServRepo = $grupoServRepo;
    }
    

    /**
     * Mostra a pagina geral de servicos
     *
     * @param Request $request
     */
    public function getIndex(Request $request)
    {
        $grupoServicos = $this->grupoServRepo->all();

        return view('pages.servicos-geral')->with([
            'grupoServicos' => $grupoServicos
        ]);     
    }

    /**
     * Mostra a pagina com detalhes de 1 tipo de grupo de servico
     * @param Request $request
     */
    public function getServico($id)
    {
        $grupoServico = $this->grupoServRepo->findWithoutFail($id);

        if (empty($grupoServico)) {
            Flash::error('Grupo de servicos não encontrado');
            return redirect(route('grupoServicos.index'));
        }

        return view('pages.servicos-interno')->with([
            'grupoServico' => $grupoServico
        ]);     
    }
    
}
