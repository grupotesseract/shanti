<?php

namespace App\Models;

use Eloquent as Model;
use App\Helpers\DeleteModelHelper;

/**
 * Class TrabalhoPortfolio
 * @package App\Models
 * @version September 7, 2018, 9:11 pm BRT
 *
 * @property string nome
 * @property string descricao_listagem
 */
class TrabalhoPortfolio extends Model
{
    //constance para obter o nome da resource que identifica as actions dos controllers a partir da classe
    const ROUTE_RESOURCE = 'trabalhoPortfolios';

    public $table = 'trabalho_portfolios';

    public $fillable = [
        'nome',
        'descricao_listagem',
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
       'fotos',
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
     * Relação de polimorfica com fotos
     *
     * @return void
     */
    public function fotos()
    {
        return $this->morphMany(\App\Models\Foto::class, 'owner');
    }

    /**
     * Relação entre TrabalhoPortfolio e Foto da listagem
     */
    public function fotoListagem()
    {
        return $this->fotos()->whereNull('tipo');
    }

    /**
     * Relação entre TrabalhoPortfolio e Foto de capa
     */
    public function fotoCapa()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_CAPA);
    }

    /**
     * Scope para aplicar na query filtrando por os Trabalhos do Portfolio que estao ativos
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
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo que irão aparecer 450x450 max
     */
    public function getLinkFotoListagemAttribute()
    {
        if ($this->fotoListagem()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/c_scale,w_600,q_auto/"
                . $this->fotoListagem()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/450x450';

    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo que irão aparecer ~1200max
     */
    public function getLinkFotoCapaAttribute()
    {
        if ($this->fotoCapa()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/c_scale,w_1200,q_auto/"
                . $this->fotoCapa()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/1200x550';


    }

    /**
     * Relacao entre um trabalho do portfolio e os blocos de descricao que compoem a pagina interna do profissional
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
            $retorno .= '<div class="col-xs-12 bloco-descricao">'
                .$Bloco->getHtmlFormatado() 
                .'</div>';
        }

        return $retorno;
    }

    
}
