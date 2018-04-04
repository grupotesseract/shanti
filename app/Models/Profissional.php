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
        'descricao_listagem'
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
    
}
