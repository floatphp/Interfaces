<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : FloatPHP
 * @subpackage: Interfaces Kernel Component
 * @version   : 1.0.0
 * @category  : PHP framework
 * @copyright : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link      : https://www.floatphp.com
 * @license   : MIT License
 *
 * This file if a part of FloatPHP Framework
 */

namespace FloatPHP\Interfaces;

interface ModelInterface
{
	function all();
	function create();
	function save($id);
	function delete($id);
	function find($id);
	function search($fields = [], $sort = []);
	function min($field);
	function max($field);
	function avg($field);
	function sum($field);
	function count($field);
}