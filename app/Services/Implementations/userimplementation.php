<?php 
namespace App\Services\Implementations;

use App\Services\Interfaces\userinterface;
use App\Models\Usuarios;

class userimplementation implements userinterface{

	private $model;
	
	function __construct(){
		$this->model = new Usuarios();
	}

	function getUser(){

		return $this->model->get();
	}

	function getUserById(int $id){

	}

	function postUser(array $user){
		$this->model->create($user);
	}

	function putUser(array $user, int $id){

		$this->model->where('id',$id)->fill($user)->save();
	}

	function delUser(int $id){

		$user = $this->model->find($id);
		if ($user != null){
			$user->delete();
		}
	}
}
 ?>
