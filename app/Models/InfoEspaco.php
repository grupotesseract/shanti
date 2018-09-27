<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InfoEspaco
 * @package App\Models
 * @version September 27, 2018, 2:28 am BRT
 *
 * @property string citacao
 * @property string autor
 * @property string descricao
 */
class InfoEspaco extends Model
{
    public $table = 'info_espacos';
    
    public $fillable = [
        'citacao',
        'autor',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'citacao' => 'string',
        'autor' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    /**
     * Relação de polimorfica com fotos
     *
     * @return void
     */
    public function fotos()
    {
        return $this->morphMany(\App\Models\Foto::class, 'owner');
    }



}
