<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : FloatPHP
 * @subpackage: Interfaces Component
 * @version   : 1.0.0
 * @category  : PHP framework
 * @copyright : (c) JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link      : https://www.floatphp.com
 * @license   : MIT License
 */

namespace floatphp\Interfaces\Classes;

interface FileInterface
{
	public function isReady();
	public function write($input);
	public function addString($input);
	public function addSpace();
	public function read();
	public function close();
	public function delete();
	public function isEmpty();
}