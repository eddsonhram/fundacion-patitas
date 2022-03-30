<?php 
namespace App\Services\Interfaces;

interface razainterface
{

	/**
	 * @param int $id
	 * @param array $raza
	 */
	function getRaza();
	/**
	 * @param int $id
	 * @return Raza
	 */
	function getRazaById(int $id);
	/**
	 * @param array $raza
	 * @return void
	 */
	function postRaza(array $raza);
	/**
	 * @param array $Vacuna
	 * @param int $id
	 * @return void
	 */
	function putRaza(array $raza, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delRaza(int $id);
}



 ?>