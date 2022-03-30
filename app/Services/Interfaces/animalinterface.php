<?php 
namespace App\Services\Interfaces;

interface animalinterface
{

	/**
	 * @param int $id
	 * @param array $animal
	 */
	function getDueno();
	/**
	 * @param int $id
	 * @return Animal
	 */
	function getDuenoById(int $id);
	/**
	 * @param array $animal
	 * @return void
	 */
	function postDueno(array $animal);
	/**
	 * @param array $animal
	 * @param int $id
	 * @return void
	 */
	function putDueno(array $animal, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delDueno(int $id);
}
 ?>