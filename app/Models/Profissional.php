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
    //constance para obter o nome da resource que identifica as actions dos controllers a partir da classe
    const ROUTE_RESOURCE = 'profissionals';

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
        'descricao_listagem' => 'required',
        'descricao_interna' => 'required'
    ];

    /**
     * Array de relacoesDependentes que devem ser deletadas caso essa Entidade seja deletada
     *
     * @var array 
     */
    public $relacoesDependentes = [
       'fotoListagem',
       'blocosDescricao' 
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
        if ($this->fotoListagem) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/"
                . $this->fotoListagem->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/240x240';

    }

    /**
     * Relacao entre um profissional e os blocos de descricao que compoem a pagina interna do profissional
     *
     * @return void
     */
    public function blocosDescricao()
    {
        return $this->morphMany(\App\Models\BlocoDescricao::class, 'owner');
    }
    

    /**
     * Acessor para obter os blocos de descricao ja ordenados
     */
    public function getBlocosOrdenadosAttribute()
    {
        return $this->blocosDescricao()->orderBy('ordem')->get();
    }

    /**
     * Acessor para o conteudo da pagina interna ja formatado
     */
    public function getConteudoPaginaInternaAttribute()
    {
        $retorno = "";

        foreach ($this->blocosOrdenados as $Bloco) {
            $retorno .= $Bloco->getHtmlFormatado();
        }

        return $retorno;
    }


}
