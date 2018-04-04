<?php

namespace App\Helpers;

/**
 * Class: DeleteModelHelper - Responsavel por fazer delete recursivo nas entidades dependentes
 *
 */
class DeleteModelHelper
{
    /**
     * deleteRelationships 
     *
     * @param mixed $model
     */
    public static function deleteRelationships($model)
    {
        //Se tiver relacoes dependentes definidas no array
        if (count($model->relacoesDependentes)) {

            //Para cada uma delas acesse e delete
            foreach ($model->relacoesDependentes as $relacao) {
                $objRelacionado = $model->{$relacao};
                \Log::info("Deletando relacionamentos ". $relacao);

                //Se for um relacionado xMany vai retornar collection, por isso outro foreach
                switch (get_class($objRelacionado)) {
                case "Illuminate\\Database\\Eloquent\\Collection":
                    foreach ($objRelacionado as $objRelacao) {
                        $objRelacao->delete();
                    }
                    break;
                default:
                    if ($objRelacionado) $objRelacionado->delete();
                    break;
                }
            }
        }
    }

}

