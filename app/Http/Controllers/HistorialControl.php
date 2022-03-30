<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historial;
use App\Models\Animal;
use App\Models\Trabajador;
use App\Models\Vacunas;
use App\Services\Implementations\historialimplementation;
use App\Validaciones\validarHistorial;
use Resources\Views\Historial\vistaHistorial;

class HistorialControl extends Controller{
    
     
        /**
     * @var userimplementation
     */
    private $historialservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(historialimplementation $historialservice, Request $request, validarHistorial $validarhistorial){
        $this->historialservice = $historialservice;
        $this->request = $request;
        $this->validacion = $validarhistorial;
    }


    function crearHistorial(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->historialservice->postHistorial($this->request->all());
    }
        return $response;
    }

    function obtenerHistorial(){

        return response($this->historialservice->getHistorial());
    }

    function actualizarHistorial(int $id){

        $response = response("", 202);
        $this->historialservice->putHistorial($this->request->all(), $id);
        return $response;
    }

    function borrarHistorial(int $id){

        $response = response("", 202);
        $this->historialservice->delHistorial($id);
        return response("", 204);
    }
}

 ?>