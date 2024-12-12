<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Interfaces Kernel Component
 * @version    : 1.4.x
 * @copyright  : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Kernel;

interface AuthenticationInterface
{
	/**
	 * @param string $user
	 * @return mixed
	 */
	function getUser(string $user);

	/**
	 * @param string $user
	 * @return bool
	 */
	function hasSecret(string $user) : bool;

	/**
	 * @return string
	 */
	function getKey() : string;
}
