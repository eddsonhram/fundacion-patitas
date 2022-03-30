<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\vacunainterface;
use App\Models\Vacunas;

class vacunaimplementation implements vacunainterface{

private $model;

	function __construct(){
		$this->model = new Vacunas();
	}

	function getVacuna(){
		return $this->model->get();
	}

	function getVacunaById(int $id){

	}

	function postVacuna(array $vacuna){
		$this->model->create($vacuna);
	}

	function putVacuna(array $vacuna, int $id){
	$this->model->where('id',$id)->fill($vacuna)->save();
	}


	function delVacuna(int $id){
		$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}
	}
}

 ?>