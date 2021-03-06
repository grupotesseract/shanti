<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ItemProgramacao;

class CreateItemProgramacaoRequest extends FormRequest
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
        $rules += [ 'url_amigavel' => 'required|unique:item_programacaos'];
        return $rules;
    }
}
