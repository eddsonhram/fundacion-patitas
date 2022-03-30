<?php 
namespace App\Services\Interfaces;

interface colorinterface
{

	/**
	 * @param int $id
	 * @param array $color
	 */
	function getColor();
	/**
	 * @param int $id
	 * @return Color
	 */
	function getColorById(int $id);
	/**
	 * @param array $color
	 * @return void
	 */
	function postColor(array $color);
	/**
	 * @param array $color
	 * @param int $id
	 * @return void
	 */
	function putColor(array $color, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delColor(int $id);
}
 ?>