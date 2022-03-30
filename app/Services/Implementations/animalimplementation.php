<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\animalinterface;
use App\Models\Animal;

class animalimplementation implements animalinterface{

private $model;


	function __construct(){
		$this->model = new Animal();
	}

	function getAnimal(){
		return $this->model->get();
	}
	

	function getAnimalById(int $id){

	}


	function postAnimal(array $animal){
		$this->model->create($animal);
	}


	function putAnimal(array $animal, int $id){
$this->model->where('id',$id)->fill($animal)->save();
	}
	

	function delAnimal(int $id){
			$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}	
	}
}
 ?>