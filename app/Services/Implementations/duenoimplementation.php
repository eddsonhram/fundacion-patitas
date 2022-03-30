<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\duenointerface;
use App\Models\Dueno;

class duenoimplementation implements duenointerface{

private $model;


	function __construct(){
		$this->model = new Dueno();
	}


	
	function getDueno(){
		return $this->model->get();
	}
	

	function getDuenoById(int $id){

	}


	function postDueno(array $dueno){
		$this->model->create($dueno);
	}


	function putDueno(array $dueno, int $id){
$this->model->where('id',$id)->fill($dueno)->save();
	}
	

	function delDueno(int $id){
			$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}	
	}
}


 ?>