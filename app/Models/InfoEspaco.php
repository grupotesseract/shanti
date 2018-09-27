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
    use SoftDeletes;

    public $table = 'info_espacos';
    

    protected $dates = ['deleted_at'];


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

    
}
