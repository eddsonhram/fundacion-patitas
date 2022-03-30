<?php 
namespace App\Services\Interfaces;

interface historialinterface
{

	/**
	 * @param int $id
	 * @param array $historial
	 */
	function getHistorial();
	/**
	 * @param int $id
	 * @return Historial
	 */
	function getHistorialById(int $id);
	/**
	 * @param array $historial
	 * @return void
	 */
	function postHistorial(array $historial);
	/**
	 * @param array $historial
	 * @param int $id
	 * @return void
	 */
	function putHistorial(array $historial, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delHistorial(int $id);
}
 ?>