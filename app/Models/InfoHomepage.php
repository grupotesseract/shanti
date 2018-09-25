<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class InfoHomepage
 * @package App\Models
 * @version September 21, 2018, 9:53 pm BRT
 *
 */
class InfoHomepage extends Model
{
    public $table = 'info_homepages';

    public $fillable = [
        'texto_destaque'
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


    /**
     * Funcao para filtrar a query de fotos() ja para a foto de fundo da Home
     */
    public function fotoFundo()
    {
        return $this->fotos()->where('tipo' , \App\Models\Foto::TIPO_HOME_BG);
    }

    /**
     * Funcao para filtrar a query de fotos() ja para a foto do icone de Servicos
     */
    public function fotoServicos()
    {
        return $this->fotos()->where('tipo' , \App\Models\Foto::TIPO_HOME_SERVICOS);
    }
    
    /**
     * Funcao para filtrar a query de fotos() ja para a foto do icone de Cursos
     */
    public function fotoCursos()
    {
        return $this->fotos()->where('tipo' , \App\Models\Foto::TIPO_HOME_CURSOS);
    }

    /**
     * Funcao para filtrar a query de fotos() ja para a foto do icone de Eventos
     */
    public function fotoEventos()
    {
        return $this->fotos()->where('tipo' , \App\Models\Foto::TIPO_HOME_EVENTOS);
    }

    /**
     * Acessor para functionar como um relacionamento comum 
     * Com chamada da funcao fotoFundo() retorna a query e sem a chamada, executa a query
     */
    public function getFotoFundoAttribute()
    {
        return $this->fotoFundo()->get();
    }

    /**
     * Acessor para functionar como um relacionamento comum 
     * Com chamada da funcao fotoServicos() retorna a query e sem a chamada, executa a query
     */
    public function getFotoServicosAttribute()
    {
        return $this->fotoServicos()->get();
    }
    
    /**
     * Acessor para functionar como um relacionamento comum 
     * Com chamada da funcao fotoCursos() retorna a query e sem a chamada, executa a query
     */
    public function getFotoCursosAttribute()
    {
        return $this->fotoCursos()->get();
    }

    /**
     * Acessor para functionar como um relacionamento comum 
     * Com chamada da funcao fotoEventos() retorna a query e sem a chamada, executa a query
     */
    public function getFotoEventosAttribute()
    {
        return $this->fotoEventos()->get();
    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo ou um placeholder
     *
     * @return string - URL da imagem ou de um placeholder de tamanho ideal
     */
    public function getLinkFotoFundoAttribute()
    {
        if ($this->fotoFundo()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/c_scale,w_1920,q_auto/"
                . $this->fotoFundo()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/1920x420';
    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo ou um placeholder
     *
     * @return string - URL da imagem ou de um placeholder de tamanho ideal
     */
    public function getLinkFotoServicosAttribute()
    {
        if ($this->fotoServicos()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/c_crop,w_650,q_auto/"
                . $this->fotoServicos()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/650x650';
    }

    
    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo ou um placeholder
     *
     * @return string - URL da imagem ou de um placeholder de tamanho ideal
     */
    public function getLinkFotoCursosAttribute()
    {
        if ($this->fotoCursos()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/c_crop,w_650,q_auto/"
                . $this->fotoCursos()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/650x650';
    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo ou um placeholder
     *
     * @return string - URL da imagem ou de um placeholder de tamanho ideal
     */
    public function getLinkFotoEventosAttribute()
    {
        if ($this->fotoEventos()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/c_crop,w_650,q_auto/"
                . $this->fotoEventos()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/650x650';
    }

}
