<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\razainterface;
use App\Models\Raza;

class razaimplementation implements razainterface{

private $model;


	function __construct(){
		$this->model = new Raza();
	}


	
	function getRaza(){
		return $this->model->get();
	}
	

	function getRazaById(int $id){
		
	}


	function postRaza(array $raza){
		$this->model->create($raza);
	}


	function putRaza(array $raza, int $id){
$this->model->where('id',$id)->fill($raza)->save();
	}
	

	function delRaza(int $id){
			$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}	
	}
}
 ?>