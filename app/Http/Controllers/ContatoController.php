<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{

    /**
     * Mostra a pagina do Quem somos com os Profissionais
     *
     * @param Request $request
     */
    public function getIndex(Request $request)
    {
        return view('pages.contato');     
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function postContato(Request $request)
    {
        \Flash::success('Obrigado, entraremos em contato.');

        \Mail::to('renatoo.agomes@gmail.com')
            ->send(new \App\Mail\EmailContato($request->nome, $request->email, $request->telefone, $request->observacao));

        return redirect()->back();
    }
    
    
}
