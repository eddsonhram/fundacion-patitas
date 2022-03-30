<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacunas;
use App\Services\Implementations\vacunaimplementation;
use App\Validaciones\validarVacuna;
use Resources\Views\Vacuna\vistaVacuna;

class VacunasControl extends Controller{
    
        /**
     * @var userimplementation
     */
    private $vacunaservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(vacunaimplementation $vacunaservice, Request $request, validarVacuna $validarvacuna){
        $this->vacunaservice = $vacunaservice;
        $this->request = $request;
        $this->validacion = $validarvacuna;
    }


    function crearVacuna(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->vacunaservice->postVacuna($this->request->all());
    }
        return $response;
    }

    function obtenerVacuna(){

        return response($this->vacunaservice->getVacuna());
    }

    function actualizarVacuna(int $id){

        $response = response("", 202);
        $this->vacunaservice->putVacuna($this->request->all(), $id);
        return $response;
    }

    function borrarVacuna(int $id){

        $response = response("", 202);
        $this->vacunaservice->delVacuna($id);
        return response("", 204);
    }
}

 ?>