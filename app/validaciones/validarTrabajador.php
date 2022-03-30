<?php 
namespace App\Validaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class validarTrabajador {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function validar(){

		return Validator::make($this->request->all(), $this->reglas(), $this->mensajes());
	}

	private function reglas(){

		return [
			'cedula' => "required|unique:trabajador,cedula,",
			'nombre' => "required",
			'edad' => "required",
			'direccion' => "required",
			'rol' => "required"
		];
	}

	private function mensajes(){

		return [];
	}
}


 ?>