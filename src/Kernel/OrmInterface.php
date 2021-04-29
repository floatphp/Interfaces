<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : FloatPHP
 * @subpackage: Interfaces Kernel Component
 * @version   : 1.0.1
 * @category  : PHP framework
 * @copyright : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link      : https://www.floatphp.com
 * @license   : MIT License
 */

namespace FloatPHP\Interfaces\Kernel;

interface OrmInterface
{
	function __set($name, $value);
	function __get($name);
	function select(OrmQueryInterface $data);
	function query($sql, $isSingle);
	function save($id = '0');
	function create();
	function delete($id = '0');
	function find($id = '');
	function search($fields = [], $sort = []);
	function all();
	function min($field);
	function max($field);
	function avg($field);
	function sum($field);
	function count($field, $data = null);
	function deleteAll($table);
}
