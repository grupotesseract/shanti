<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Artigo
 * @package App\Models
 * @version June 15, 2018, 8:36 pm BRT
 *
 * @property string nome
 * @property string arquivo
 */
class Artigo extends Model
{
    use SoftDeletes, \Spatie\Tags\HasTags;

    const TIPO_ARQUIVO = 1;
    const TIPO_LINK = 2;

    /**
     * Array com valores dos inteiros e nomes de cada tipo 
     * para referenciar nas views que devem ser renderizadas
     */
    const TIPOS = [
        self::TIPO_ARQUIVO => 'ARQUIVO',
        self::TIPO_LINK => 'LINK'
    ];
    

    public $table = 'artigos';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'nome',
        'tipo',
        'arquivo',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'arquivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'arquivo' => 'required_without:link',
        'link' => 'required_without:arquivo'
    ];

    public $appends = [
        'nomeTags',
        'tipoTexto'
    ];


    /**
     * Acessor para o nome das tags separadas por virgula
     */
    public function getNomeTagsAttribute()
    {
        $tags = implode(', ', $this->tags->pluck('name')->all());
        return $tags;
    }

    /**
     * Acessor para o nome do tipo mapeado a partir do integer do BD
     */
    public function getTipoTextoAttribute()
    {
        return self::TIPOS[$this->tipo];
    }
    
}
