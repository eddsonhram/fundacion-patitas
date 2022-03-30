<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Services\Implementations\trabajadorimplementation;
use App\Validaciones\validarTrabajador;

class TrabajadoresControl extends Controller{
    
   
    /**
     * @var userimplementation
     */
    private $trabajadorservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(trabajadorimplementation $trabajadorservice, Request $request, validarTrabajador $validartrabajador){
        $this->trabajadorservice = $trabajadorservice;
        $this->request = $request;
        $this->validacion = $validartrabajador;
    }


    function crearTrabajador(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->trabajadorservice->postTrabajador($this->request->all());
    }
        return $response;
    }

    function obtenerTrabajdor(){

        return response($this->trabajadorservice->getTrabajador());
    }

    function actualizarTrabajador(int $id){

        $response = response("", 202);
        $this->trabajadorservice->putTrabajador($this->request->all(), $id);
        return $response;
    }

    function borrarTrabajador(int $id){

        $response = response("", 202);
        $this->trabajadorservice->delTrabajador($id);
        return response("", 204);
    }
}