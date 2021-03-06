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
        \Flash::success('Muito obrigado. Em breve, entraremos em contato.');

        \Mail::send(new \App\Mail\EmailContato($request->nome, $request->email, $request->telefone, $request->observacao));

        return redirect()->back();
    }
    
    
}
