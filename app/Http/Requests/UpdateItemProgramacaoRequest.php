<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ItemProgramacao;

class UpdateItemProgramacaoRequest extends FormRequest
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
        $rules = ItemProgramacao::$rules;
        $idItemProgramacao = \Request::segment(2);
        $rules += [ 'url_amigavel' => 'required|unique:item_programacaos,url_amigavel,'.$idItemProgramacao ];
        return $rules;
    }
}
