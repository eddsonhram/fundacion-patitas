<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dueno;
use App\Models\Animal;
use App\Models\Trabajador;
use App\Services\Implementations\duenoimplementation;
use App\Validaciones\validarDueno;
use Resources\Views\Dueno\vistaDueno;

class DuenosControl extends Controller{
    
          /**
     * @var userimplementation
     */
    private $duenoservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(duenoimplementation $duenoservice, Request $request, validarDueno $validardueno){
        $this->duenoservice = $duenoservice;
        $this->request = $request;
        $this->validacion = $validardueno;
    }

    function crearDueno(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->duenoservice->postDueno($this->request->all());
    }
        return $response;
    }

    function obtenerDueno(){

        return response($this->duenoservice->getDueno());
    }

    function actualizarDueno(int $id){

        $response = response("", 202);
        $this->duenoservice->putDueno($this->request->all(), $id);
        return $response;
    }

    function borrarDueno(int $id){

        $response = response("", 202);
        $this->duenoservice->delDueno($id);
        return response("", 204);
    }
}

 ?>