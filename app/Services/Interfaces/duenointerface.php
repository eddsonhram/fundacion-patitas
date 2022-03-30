<?php 
namespace App\Services\Interfaces;

interface duenointerface
{

	/**
	 * @param int $id
	 * @param array $dueno
	 */
	function getDueno();
	/**
	 * @param int $id
	 * @return Dueno
	 */
	function getDuenoById(int $id);
	/**
	 * @param array $dueno
	 * @return void
	 */
	function postDueno(array $dueno);
	/**
	 * @param array $dueno
	 * @param int $id
	 * @return void
	 */
	function putDueno(array $dueno, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delDueno(int $id);
}
 ?>