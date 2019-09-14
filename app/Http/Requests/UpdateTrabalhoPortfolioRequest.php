<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\TrabalhoPortfolio;

class UpdateTrabalhoPortfolioRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = TrabalhoPortfolio::$rules;
        $idTrabalhoPortfolio = \Request::segment(2);
        $rules += [ 'url_amigavel' => 'required|unique:trabalho_portfolios,url_amigavel,'.$idTrabalhoPortfolio ];
        return $rules;
    }
}
