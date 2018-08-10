<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GrupoServico
 * @package App\Models
 * @version August 9, 2018, 9:47 pm -03
 *
 * @property string titulo
 * @property string descricao_grupo
 * @property string descricao_servicos
 * @property json lista_servicos
 */
class GrupoServico extends Model
{
    use SoftDeletes;

    public $table = 'grupo_servicos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'descricao_grupo',
        'descricao_servicos',
        'lista_servicos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'descricao_grupo' => 'string',
        'descricao_servicos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'descricao_grupo' => 'required',
        'descricao_servicos' => 'required',
        'lista_servicos' => 'required'
    ];

    /**
     * Mutator para encodar em json o result da lista_servicos
     */
    public function setListaServicosAttribute($value)
    {
        return $this->attributes['lista_servicos'] = json_encode($value);
    }

    /**
     * Acessor para decodar o json 
     */
    public function getListaServicosAttribute()
   {
        return json_decode($this->attributes['lista_servicos']);
    }

    /**
     * Acessor para um array com os servicos
     */
    public function getArrayServicosAttribute()
    {
        return explode(',',$this->listaServicos);
    }

    /**
     * Acessor para o titulo em uppercase
     */
    public function getTituloAttribute($value)
    {
        return strtoupper($value);
    }


    
}
