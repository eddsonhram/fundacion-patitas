<?php 
namespace App\Services\Interfaces;

interface trabajadorinterface
{

	/**
	 * @param int $id
	 * @param array $trabajador
	 */
	function getTrabajador();
	/**
	 * @param int $id
	 * @return Trabajador
	 */
	function getTrabajadorById(int $id);
	/**
	 * @param array $trabajador
	 * @return void
	 */
	function postTrabajador(array $trabajador);
	/**
	 * @param array $trabajador
	 * @param int $id
	 * @return void
	 */
	function putTrabajador(array $trabajador, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delTrabajador(int $id);
}
 ?>