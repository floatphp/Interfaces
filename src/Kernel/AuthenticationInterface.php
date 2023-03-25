<?php
/**
 * @author     : JIHAD SINNAOUR
 * @package    : FloatPHP
 * @subpackage : Interfaces Kernel Component
 * @version    : 1.0.2
 * @category   : PHP framework
 * @copyright  : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link       : https://www.floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Kernel;

interface AuthenticationInterface
{
	/**
	 * @param string $username
	 * @return mixed
	 */
	function getUser(string $username);

	/**
	 * @param string $username
	 * @return bool
	 */
	function hasSecret(string $username) : bool;

	/**
	 * @param void
	 * @return string
	 */
	function getKey() : string;
}
