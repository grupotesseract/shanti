<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ItemProgramacao
 * @package App\Models
 * @version September 12, 2018, 10:46 pm BRT
 *
 * @property string nome
 * @property smallInteger tipo
 * @property string horario
 * @property string link_facebook
 * @property boolean ativo_listagem
 * @property timestamp data
 */
class ItemProgramacao extends Model
{
    public $table = 'item_programacaos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nome',
        'tipo',
        'horario',
        'link_facebook',
        'ativo_listagem',
        'data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'horario' => 'string',
        'link_facebook' => 'string',
        'ativo_listagem' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'tipo' => 'required'
    ];

    
}
