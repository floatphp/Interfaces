<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Interfaces Kernel Component
 * @version    : 1.5.x
 * @copyright  : (c) 2018 - 2025 Jihad Sinnaour <me@jihadsinnaour.com>
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
