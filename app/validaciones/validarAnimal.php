<?php 
namespace App\Validaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class validarAnimal {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function validar(){

		return Validator::make($this->request->all(), $this->reglas(), $this->mensajes());
	}

	private function reglas(){

		return [
			'codigo' => "required|unique:animal,codigo," . $this->request->id,
			'nombre' => "required",
			'edad' => "required",
			'sitio' => "required",
			'rescate' => "required"
		];
	}

	private function mensajes(){

		return [];
	}
}


 ?>