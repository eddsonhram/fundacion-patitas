<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\trabajadorinterface;
use App\Models\Trabajador;

class trabajadorimplementation implements trabajadorinterface{


private $model;

	function __construct(){
		$this->model = new Trabajador();
	}


	function getTrabajador(){
		return $this->model->get();
	}

	function getTrabajadorById(int $id){

	}

	function postTrabajador(array $trabajador){
		$this->model->create($trabajador);
	}

	function putTrabajador(array $trabajador, int $id){
		$this->model->where('id',$id)->fill($trabajador)->save();
	}

	function delTrabajador(int $id){
		$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}
	}
}
 ?>