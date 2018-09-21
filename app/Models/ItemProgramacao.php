<?php

namespace App\Models;

use Eloquent as Model;
use App\Helpers\DeleteModelHelper;

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
    const ROUTE_RESOURCE = 'itemProgramacaos';

    public $table = 'item_programacaos';

    protected $dates = ['deleted_at'];

    const TIPO_CURSO = 1;   
    const TIPO_CURSO_SEM_DATA = 2;   
    const TIPO_EVENTO = 3;   

    /**
     * Array com valores dos inteiros e nomes de cada tipo 
     */
    const TIPOS = [
        self::TIPO_CURSO => 'CURSO',
        self::TIPO_CURSO_SEM_DATA => 'CURSO_SEM_DATA',
        self::TIPO_EVENTO => 'EVENTO'
    ];

    public $fillable = [
        'nome',
        'tipo',
        'breve_descricao_listagem',
        'descricao_listagem',
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
        'descricao_listagem' => 'string',
        'data_listagem' => 'string',
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


    /**
     * Array de relacoesDependentes que devem ser deletadas caso essa Entidade seja deletada
     *
     * @var array 
     */
    public $relacoesDependentes = [
        'fotoListagem',
        'blocosDescricao' 
    ];

    public $appends = [
        'tipoTexto',
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
     * Scope para aplicar na query filtrando por 
     */
    public function scopeCursos($query)
    {
        return $query->where('tipo', self::TIPO_CURSO);
    }

    /**
     * Scope para aplicar na query filtrando por 
     */
    public function scopeCursosSemData($query)
    {
        return $query->where('tipo', self::TIPO_CURSO_SEM_DATA);
    }

    /**
     * Scope para aplicar na query filtrando por 
     */
    public function scopeEventos($query)
    {
        return $query->where('tipo', self::TIPO_EVENTO);
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
     * Relação entre ItemProgramacao e Foto da listagem
     */
    public function fotoListagem()
    {
        return $this->fotos()->whereNull('tipo');
    }

    /**
     * Relação entre ItemProgramacao e Foto de capa
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
                . "/image/upload/c_scale,w_500,q_auto/"
                . $this->fotoListagem()->first()->cloudinary_id
                . ".jpg";
        }

        return '';

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

        return '';

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

    /**
     * Acessor para o nome do tipo mapeado a partir do integer do BD
     */
    public function getTipoTextoAttribute()
    {
        return $this->tipo ? self::TIPOS[$this->tipo] : '';
    }


}
