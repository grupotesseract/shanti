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

    public $table = 'artigos';
    

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nome',
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
    ];




    /**
     * Acessor para 
     */
    public function getNomeTagsAttribute()
    {
        $tags = implode(', ', $this->tags->pluck('name')->all());
        return $tags;
    }
    
}
