<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Services\Implementations\colorimplementation;
use App\Validaciones\validarColor;
use Resources\Views\Color\vistaColor;

class ColorControl extends Controller{
    
         /**
     * @var userimplementation
     */
    private $colorservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(colorimplementation $colorservice, Request $request, validarColor $validarcolor){
        $this->colorservice = $colorservice;
        $this->request = $request;
        $this->validacion = $validarcolor;
    }

    function crearColor(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->colorservice->postColor($this->request->all());
    }
        return $response;
    }

    function obtenerColor(){

        return response($this->colorservice->getColor());
    }

    function actualizarEspecies(int $id){

        $response = response("", 202);
        $this->colorservice->putColor($this->request->all(), $id);
        return $response;
    }

    function borrarColor(int $id){

        $response = response("", 202);
        $this->colorservice->delColor($id);
        return response("", 204);
    }
}

 ?>