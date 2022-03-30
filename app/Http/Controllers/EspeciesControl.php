<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especies;
use App\Services\Implementations\especiesimplementation;
use App\Validaciones\validarEspecie;

class EspeciesControl extends Controller{
    
         /**
     * @var userimplementation
     */
    private $especiesservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(especiesimplementation $especiesservice, Request $request, validarEspecie $validarespecie){
        $this->especiesservice = $especiesservice;
        $this->request = $request;
        $this->validacion = $validarespecie;
    }

    function crearEspecies(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->especiesservice->postEspecies($this->request->all());
    }
        return $response;
    }

    function obtenerEspecies(){

        return response($this->especiesservice->getEspecies());
    }

    function actualizarEspecies(int $id){

        $response = response("", 202);
        $this->especiesservice->putEspecies($this->request->all(), $id);
        return $response;
    }

    function borrarEspecies(int $id){

        $response = response("", 202);
        $this->especiesservice->delEspecies($id);
        return response("", 204);
    }
}

 ?>