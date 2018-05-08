<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\DeleteModelHelper;

/**
 * Class Profissional
 * @package App\Models
 * @version March 30, 2018, 9:56 pm BRT
 *
 * @property string nome
 * @property string descricao_listagem
 */
class Profissional extends Model
{
    use SoftDeletes;

    public $table = 'profissionals';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nome',
        'descricao_listagem',
        'descricao_interna',
        'ativo_listagem',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'descricao_listagem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'descricao_listagem' => 'required'
    ];

    /**
     * Array de relacoesDependentes que devem ser deletadas caso essa Entidade seja deletada
     *
     * @var array 
     */
    public $relacoesDependentes = [
       'fotoListagem' 
    ];


    /**
     * Bindando Model Events para controlar o delete
     */
    public static function boot()
    {
        parent::boot();

        //Bindando o deleting para remover as relationships
        static::deleting(function ($model) {
            DeleteModelHelper::deleteRelationships($model);
        });
    }

    /**
     * Relação entre Profissional e Foto da listagem
     */
    public function fotoListagem()
    {
        return $this->morphOne(\App\Models\Foto::class, 'owner');
    }


    /**
     * Scope para aplicar na query filtrando por.
     */
    public function scopeAtivos($query)
    {
        return $query->where('ativo_listagem', true);
    }

    /**
     * Acessor para o texto de 'Sim' ou 'Não' dependendo da propriedade $ativo_listagem.
     */
    public function getStringAtivoListagemAttribute()
    {
        return $this->ativo_listagem ? 'Sim' : 'Não';
    }
    
    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo que irão aparecer 240x240
     */
    public function getLinkFotoQuemSomosAttribute()
    {
        return "//res.cloudinary.com/"
            . env('CLOUDINARY_CLOUD_NAME')
            . "/image/upload/c_scale,g_center,h_240,w_240/"
            . $this->fotoListagem->cloudinary_id
            . ".jpg";
    }
}
