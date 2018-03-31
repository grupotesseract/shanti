<?php

namespace App\Repositories;

use App\Models\Foto;
use InfyOm\Generator\Common\BaseRepository;

class FotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Foto::class;
    }

    /**
     * uploadAndCreate - Guarda o arquivo no /uploads/ e cria a Foto.
     *
     * @param mixed $request
     */
    public function uploadAndCreate($request)
    {
        //Testando se o file é valido
        $file = $request->file('file');
        if ($file && $file->isValid()) {

            //Criando path inicial para direcionar o arquivo
            $destinationPath = public_path().'/uploads/';
            //Pega o formato da imagem
            $extension = $request->file('file')->getClientOriginalExtension();

            //usando o intervention para criar a imagem
            $filename = time();
            $file = \Image::make($file->getRealPath());
            $upload_success = $file->save($destinationPath.$filename.'.'.$extension);

            //Se o upload da foto ocorreu com sucesso
            if ($upload_success) {

                //adicionando as informações da foto na request
                $request->request->add([
                    'image_name' => $filename,
                    'image_path' => $destinationPath,
                    'image_extension' => $extension,
                ]);

                //Criando e persistindo no BD uma nova foto já associada ao user
                $novaFoto = $this->model->create($request->all());

                return $novaFoto;

                // Se nao tiver funcionado, retornar false no success para o js se manisfestar
            } else {
                return [
                    'success' => false,
                ];
            }
        }
    }

    /**
     * sendToCloudinary.
     *
     * @param mixed $fullPath
     * @param mixed $publicId
     */
    public function sendToCloudinary($foto, $publicId)
    {

        //Se existir o file
        if (\File::exists($foto->fullPath)) {
            $retornoCloudinary = \Cloudder::upload($foto->fullPath, $publicId);

            return  $foto->update([
                'cloudinary_id' => $publicId,
            ]);
        } else {
            return false;
        }
    }

    /**
     * removeFromCloudinary.
     *
     * @param mixed $fullPath
     * @param mixed $publicId
     */
    public function removeFromCloudinary($fotoID)
    {
        $foto = $this->find($fotoID);
        $retornoCloudinary = \Cloudder::destroyImage($foto->cloudinary_id);

        return  empty($retornoCloudinary->deleted) ? false : true;
    }

    /**
     * Override BaseRepository@delete
     * Delete a entity in repository by id.
     *
     * @param $id
     *
     * @return int
     */
    public function delete($id)
    {
        $this->removeFromCloudinary($id);
        $this->deleteLocal($id);

        return parent::delete($id);
    }
    

    public function deleteLocal($id)
    {
        $Foto = $this->findWithoutFail($id);

        if ($Foto && \File::exists($Foto->fullPath)) {
            \File::delete($Foto->fullPath);
        }
    }



}
