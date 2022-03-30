<?php 
namespace App\Validaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class validarDueno {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function validar(){

		return Validator::make($this->request->all(), $this->reglas(), $this->mensajes());
	}

	private function reglas(){

		return [
			'cedula' => "required|unique:dueno,cedula," . $this->request->id,
			'nombre' => "required",
			'edad' => "required",
			'direccion' => "required"
		];
	}

	private function mensajes(){

		return [];
	}
}


 ?>