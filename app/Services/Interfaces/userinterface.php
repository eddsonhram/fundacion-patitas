<?php 

namespace App\Services\Interfaces;

interface userinterface
{
	/**
	 * @param int $id
	 * @param array $user
	 */
	function getUser();
	/**
	 * @param int $id
	 * @return Usuario
	 */
	function getUserById(int $id);
	/**
	 * @param array $user
	 * @return void
	 */
	function postUser(array $user);
	/**
	 * @param array $user
	 * @param int $id
	 * @return void
	 */
	function putUser(array $user, int $id);
	/**
	 * @param int $id
	 * @return boolean
	 */
	function delUser(int $id);
}
