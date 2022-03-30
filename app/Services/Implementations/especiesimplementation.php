<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\especiesinterface;
use App\Models\Especies;

class especiesimplementation implements especiesinterface{

private $model;


	function __construct(){
		$this->model = new Especies();
	}

	function getEspecies(){
		return $this->model->get();
	}
	

	function getEspeciesById(int $id){

	}


	function postEspecies(array $especies){
		$this->model->create($especies);
	}


	function putEspecies(array $especies, int $id){
$this->model->where('id',$id)->fill($especies)->save();
	}
	

	function delEspecies(int $id){
			$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}	
	}
}
 ?>