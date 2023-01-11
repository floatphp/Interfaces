<?php
/**
 * @author     : JIHAD SINNAOUR
 * @package    : FloatPHP
 * @subpackage : Interfaces Kernel Component
 * @version    : 1.0.1
 * @category   : PHP framework
 * @copyright  : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link       : https://www.floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Kernel;

interface OrmQueryInterface
{
	/**
	 * @param array $query
	 */
	function __construct($query = []);
}
