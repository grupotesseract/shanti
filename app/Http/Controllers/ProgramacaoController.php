<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;


class ProgramacaoController extends AppBaseController
{
    /**
     * Metodo para servir a view de programacao-geral
     */
    public function getProgramacaoGeral()
    {
        return view('pages.programacao.geral');
    }
    
    /**
     * Metodo para servir a view de programacao-cursos-agendados 
     */
    public function getProgramacaoCursosAgendados()
    {
        return view('pages.programacao.cursos-agendados');
    }

    /**
     * Metodo para servir a view de programacao-cursos-agendados 
     */
    public function getProgramacaoCursosNaoAgendados()
    {
        return view('pages.programacao.cursos-nao-agendados');
    }

    /**
     * Metodo para servir a view de programacao-eventos
     */
    public function getProgramacaoEventos()
    {
        return view('pages.programacao.eventos');
    }
}

