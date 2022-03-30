<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\colorinterface;
use App\Models\Color;

class colorimplementation implements colorinterface{

private $model;


	function __construct(){
		$this->model = new Color();
	}

	function getColor(){
		return $this->model->get();
	}
	

	function getColorById(int $id){

	}


	function postColor(array $color){
		$this->model->create($color);
	}


	function putColor(array $color, int $id){
$this->model->where('id',$id)->fill($color)->save();
	}
	

	function delColor(int $id){
			$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}	
	}
}


 ?>