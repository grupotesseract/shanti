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
    const TIPO_IMAGEM = 5;

    /**
     * Array com valores dos inteiros e nomes de cada tipo 
     * para referenciar nas views que devem ser renderizadas
     */
    const TIPOS = [
        self::TIPO_CITACAO => 'CITACAO',
        self::TIPO_TEXTO => 'TEXTO',
        self::TIPO_BOTAO => 'BOTAO',
        self::TIPO_LISTA => 'LISTA',
        self::TIPO_IMAGEM => 'IMAGEM'
    ];

    public $table = 'bloco_descricaos';

    public $fillable = [
        'owner_id',
        'owner_type',
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
    ];


    /**
     * Os BlocosDescricao podem pertencer a um TrabalhoPortfolio ou um Profissional
     */
    public function owner()
    {
        return $this->morphTo();
    }

    /**
     * Acessor para o nome do tipo mapeado a partir do integer do BD
     */
    public function getTipoTextoAttribute()
    {
        return self::TIPOS[$this->tipo];
    }

    /**
     * Mutator para que possa adicionar o tipo por texto ou inteiro
     */
    public function setTipoAttribute($value)
    {
        $inteiro = is_int($value);
        $value = $inteiro ? $value : array_search(strtoupper($value), self::TIPOS); 

        return $this->attributes['tipo'] = $value;
    }

    /**
     * Mutator para que faca o json_encode do conteudo antes de salvar no BD
     */
    public function setJsonConteudoAttribute($value)
    {
        $value = json_encode($value);
        return $this->attributes['json_conteudo'] = $value;
    }

    /**
     * Acessor para o conteudo do bloco, já aplicando o json_decode
     */
    public function getConteudoAttribute()
    {
        return json_decode($this->json_conteudo);
    }


    /**
     * Acessor para obter os Items de um Bloco do TIPO_LISTA
     */
    public function getItemsListagemAttribute()
    {
        $conteudo = $this->conteudo;
        return $conteudo ? $conteudo->items : [];
    }

    /**
     * Acessor para 
     */
    public function getHtmlRenderizadoAttribute()
    {
        $retorno = '';

        if ($this->tipo == self::TIPO_TEXTO) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return property_exists($conteudo,'texto') ? $conteudo->texto : '';
            }
        }

        if ($this->tipo == self::TIPO_CITACAO) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                \Log::info("\n### AQUIII!! ");
                \Log::info(json_encode($this));
                \Log::info(json_encode($conteudo));

                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('texto', $conteudo->texto)
                    ->with('autor', $conteudo->autor);
            }
        }

        if ($this->tipo == self::TIPO_LISTA) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('titulo', $conteudo->titulo)
                    ->with('items', $conteudo->items);
            }
        }

        if ($this->tipo == self::TIPO_BOTAO) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('texto', $conteudo->texto)
                    ->with('url', $conteudo->url);
            }
        }
        
        if ($this->tipo == self::TIPO_IMAGEM) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('src', $conteudo->src);
            }
        }
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function getConteudo($chave)
    {
        $conteudo = $this->conteudo;
        if ($conteudo) {
            return property_exists($conteudo, $chave) ? $conteudo->{$chave} : '';
        }

        return '*NAO ENCONTRADO*';
    }

    /**
     * Acessor para obter o HTML ja formatado de um BlocoDescricao - Para a área ADMIN (alteracoes para aparecer na listagem)
     * Pega as informacoes necessarias e envia para a view certa de acordo com o tipo do bloco, 
     *
     * @return string - HTML de cada bloco. 
     */
    public function getHtmlFormatadoAdminAttribute()
    {
        $retorno = '';

        if ($this->tipo == self::TIPO_TEXTO) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return property_exists($conteudo,'texto') ? $conteudo->texto : '';
            }
        }

        if ($this->tipo == self::TIPO_CITACAO) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('texto', $conteudo->texto)
                    ->with('autor', $conteudo->autor);
            }
        }

        if ($this->tipo == self::TIPO_LISTA) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('titulo', $conteudo->titulo)
                    ->with('items', $conteudo->items)
                    ->with('admin', true);
            }
        }

        if ($this->tipo == self::TIPO_BOTAO) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('texto', $conteudo->texto)
                    ->with('url', $conteudo->url)
                    ->with('admin', true);
            }
        }

        //Se for do tipo imagem, retornar a view do tipo correspondente
        if ($this->tipo == self::TIPO_IMAGEM) {
            $conteudo = $this->conteudo;
            if ($conteudo) {
                return view('bloco_descricaos.partials.html-'.$this->tipoTexto)
                    ->with('src', $conteudo->src)
                    ->with('admin', true);
            }
        }

    }
    
}
