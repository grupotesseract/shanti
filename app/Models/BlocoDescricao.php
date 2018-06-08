<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class BlocoDescricao
 * @package App\Models
 * @version June 4, 2018, 7:41 pm BRT
 *
 * @property integer tipo
 * @property integer ordem
 * @property string json_conteudo
 */
class BlocoDescricao extends Model
{
    /**
     * Mapendo tipos para evitar valores hardcoded
     */
    const TIPO_CITACAO = 1;
    const TIPO_TEXTO = 2;
    const TIPO_BOTAO = 3;
    const TIPO_LISTA = 4;
    const TIPO_FOTO = 5;

    const TIPOS = [
        self::TIPO_CITACAO => 'CITACAO',
        self::TIPO_TEXTO => 'TEXTO',
        self::TIPO_BOTAO => 'BOTAO',
        self::TIPO_LISTA => 'LISTA',
        self::TIPO_FOTO => 'FOTO'
    ];

    public $table = 'bloco_descricaos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'profissional_id',
        'tipo',
        'ordem',
        'json_conteudo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo' => 'integer',
        'ordem' => 'integer',
        'json_conteudo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'profissional_id' => 'required|exists:profissionals,id',
    ];


    /**
     * Relacao de pertencimento á um Profissional 
     */
    public function Profissional()
    {
        return $this->belongsTo(\App\Models\Profissional::class);
    }
    
}
