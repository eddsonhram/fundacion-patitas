<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raza;
use App\Services\Implementations\razaimplementation;
use App\Validaciones\validarRaza;
use Resources\Views\Raza\vistaRaza;

class RazaControl extends Controller{
    
    
        /**
     * @var userimplementation
     */
    private $razaservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(razaimplementation $razaservice, Request $request, validarRaza $validarraza){
        $this->razaservice = $razaservice;
        $this->request = $request;
        $this->validacion = $validarraza;
    }


    function crearRaza(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->razaservice->postRaza($this->request->all());
    }
        return $response;
    }

    function obtenerRaza(){

        return response($this->razaservice->getRaza());
    }

    function actualizarRaza(int $id){

        $response = response("", 202);
        $this->razaservice->putRaza($this->request->all(), $id);
        return $response;
    }

    function borrarRaza(int $id){

        $response = response("", 202);
        $this->razaservice->delRaza($id);
        return response("", 204);
    }
}

 ?>