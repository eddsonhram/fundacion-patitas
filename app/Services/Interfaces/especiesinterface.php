<?php 
namespace App\Services\Interfaces;

interface especiesinterface
{

	/**
	 * @param int $id
	 * @param array $especies
	 */
	function getEspecies();
	/**
	 * @param int $id
	 * @return Especies
	 */
	function getEspeciesById(int $id);
	/**
	 * @param array $especies
	 * @return void
	 */
	function postEspecies(array $especies);
	/**
	 * @param array $especies
	 * @param int $id
	 * @return void
	 */
	function putEspecies(array $especies, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delEspecies(int $id);
}
 ?>