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

interface XTPLInterface
{
	public static function build($path = null);
	public function transformAll(array $dataArray);
	public function transform(array $dataArray);
	public function setDelimiter($start,$end);
	public function shortcodeIn($shortcode);
	public function clear();
}
