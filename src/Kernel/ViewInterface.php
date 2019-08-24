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

namespace floatphp\Interfaces\Kernel;

interface ViewInterface
{
	public static function setConfig($config = []): void;
	public static function render($data, $view): void;
	public static function assign($data = [], $view = 'system/default'): string;
}
