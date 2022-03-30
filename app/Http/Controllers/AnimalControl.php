<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Services\Implementations\animalimplementation;
use App\Validaciones\validarAnimal;
use Resources\Views\Animal\vistaAnimal;

class AnimalControl extends Controller{
    
         /**
     * @var userimplementation
     */
    private $animalservice;
    /**
     * @var Request
    */
    private $request;
    private $validacion;

    public function __construct(animalimplementation $animalservice, Request $request, validarAnimal $validaranimal){
        $this->animalservice = $animalservice;
        $this->request = $request;
        $this->validacion = $validaranimal;
    }

    function crearAnimal(){
        $response = response("", 201);

        $validacion = $this->validacion->validar();

        if($validacion->fails()){
            $response = response([
                "status" => 422,
                "message" => "Error",
                "errors" => $validacion->errors()
            ], 422);
        }else{
        $this->animalservice->postAnimal($this->request->all());
    }
        return $response;
    }

    function obtenerAnimal(){

        return response($this->animalservice->getAnimal());
    }

    function actualizarAnimal(int $id){

        $response = response("", 202);
        $this->animalservice->putAnimal($this->request->all(), $id);
        return $response;
    }

    function borrarAnimal(int $id){

        $response = response("", 202);
        $this->animalservice->delAnimal($id);
        return response("", 204);
    }
}

 ?>