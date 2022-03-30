<?php 
namespace App\Services\Interfaces;

interface vacunainterface
{

	/**
	 * @param int $id
	 * @param array $vacuna
	 */
	function getVacuna();
	/**
	 * @param int $id
	 * @return vacunas
	 */
	function getVacunaById(int $id);
	/**
	 * @param array $vacuna
	 * @return void
	 */
	function postVacuna(array $vacuna);
	/**
	 * @param array $vacuna
	 * @param int $id
	 * @return void
	 */
	function putVacuna(array $vacuna, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delVacuna(int $id);
}



 ?>