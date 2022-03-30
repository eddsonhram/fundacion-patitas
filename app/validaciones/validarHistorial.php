<?php 
namespace App\Validaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class validarHistorial {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function validar(){

		return Validator::make($this->request->all(), $this->reglas(), $this->mensajes());
	}

	private function reglas(){

		return [
			'evolucion' => "required",
			'cuidados' => "required",
			'vacunas_id' => "required"
		];
	}

	private function mensajes(){

		return [];
	}
}


 ?>