<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Services\Implementations\userimplementation;
use App\Validaciones\validarUsuario;

class usuarioControl extends Controller{
    
    /**
     * @var userimplementation
     */
    private $userservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(userimplementation $userservice, Request $request, validarUsuario $validarusuario){
        $this->userservice = $userservice;
        $this->request = $request;
        $this->validacion = $validarusuario;
    }


    function crearUsuario(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->userservice->postUser($this->request->all());
    }
        return $response;
    }

    function obtenerUsuarios(){

        return response($this->userservice->getUser());
    }

    function actualizarUsuario(int $id){

        $response = response("", 202);
        $this->userservice->putUser($this->request->all(), $id);
        return $response;
    }

    function borrarUsuario(int $id){

        $response = response("", 202);
        $this->userservice->delUser($id);
        return response("", 204);
    }
}