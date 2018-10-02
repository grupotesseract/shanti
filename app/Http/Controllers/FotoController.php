<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FotoRequest;
use App\Repositories\FotoRepository;
use Flash;

class FotoController extends Controller
{

    /**
     * fotoRepository 
     * @var \App\Model\FotoRepository
     */
    public $fotoRepository;

    /**
     * Construtor recebendo informacoes necessarias
     * @param mixed FotoRepository $fotoRepository
     */
    public function __construct(FotoRepository $fotoRepository)
    { 
        $this->fotoRepository = $fotoRepository;
    }
    
    /**
     * Metodo para trocar 1 foto
     *
     * @return void
     */
    public function postTrocaFoto(FotoRequest $request, $id)
    {
        $foto = $this->fotoRepository->findWithoutFail($id);

        if (empty($foto)) {
            Flash::error('Foto não encontrada!');
            return redirect()->back();
        }

        if ($request->file) {
            $foto->delete();

            $foto = $this->fotoRepository->uploadAndCreate($request);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_foto_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto atualizada com sucesso!');
        return redirect()->back();
    }



    /**
     * Store foto 
     *
     * @return void
     */
    public function store(FotoRequest $request)
    {
        if ($request->file) {
            $foto = $this->fotoRepository->uploadAndCreate($request);

            //Upload p/ Cloudinary e delete local 
            $publicId = "shanti_foto_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto adicionada com  sucesso!');
        return redirect()->back();
    }
    


    /**
     * undocumented function
     *
     * @return void
     */
    public function destroy($id)
    {
        $foto = $this->fotoRepository->findWithoutFail($id);

        if (empty($foto)) {
            Flash::error('Foto não encontrada!');
            return redirect()->back();
        }

        $foto->delete();
        Flash::success('Foto removida com sucesso!');
        return redirect()->back();
    }
    
}
