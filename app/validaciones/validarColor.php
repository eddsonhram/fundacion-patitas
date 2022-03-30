<?php 
namespace App\Validaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class validarColor {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function validar(){

		return Validator::make($this->request->all(), $this->reglas(), $this->mensajes());
	}

	private function reglas(){

		return [
			'nombre' => "required|unique:color,nombre," . $this->request->id
		];
	}

	private function mensajes(){

		return [];
	}
}


 ?>