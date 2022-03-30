<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\Historialinterface;
use App\Models\Raza;

class historialimplementation implements historialinterface{

private $model;


	function __construct(){
		$this->model = new Historial();
	}
	
	function getHistorial(){
		return $this->model->get();
	}
	

	function getHistorialById(int $id){

	}


	function postHistorial(array $historial){
		$this->model->create($historial);
	}


	function putHistorial(array $historial, int $id){
$this->model->where('id',$id)->fill($historial)->save();
	}
	

	function delHistorial(int $id){
			$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}	
	}
}
 ?>