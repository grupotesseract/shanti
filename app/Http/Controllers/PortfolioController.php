<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;


class PortfolioController extends AppBaseController
{

    /**
     * Metodo para servir a view de listagem de portfolios
     */
    public function getPortfolio()
    {
        return view('pages.portfolio');
    }
    
    /**
     * Metodo para servir a view interna de 1 trabalho do portfolio
     */
    public function getPortfolioInterno()
    {
        return view('pages.portfolio-interno');
    }
}

