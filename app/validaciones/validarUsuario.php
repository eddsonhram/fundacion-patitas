<?php 
namespace App\Validaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class validarUsuario {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function validar(){

		return Validator::make($this->request->all(), $this->reglas(), $this->mensajes());
	}

	private function reglas(){

		return [
			'nombre' => "required",
			'email' => "required|unique:usuarios,email," . $this->request->id,
			'pass' => "required"
		];
	}

	private function mensajes(){

		return [];
	}
}


 ?>