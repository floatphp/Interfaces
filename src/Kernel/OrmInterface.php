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
	public function __set($name, $value);
	public function __get($name);
	public function select(OrmQueryInterface $data);
	public function query($sql, $isSingle);
	public function save($id = '0');
	public function create();
	public function delete($id = '0');
	public function find($id = '');
	public function search($fields = [], $sort = []);
	public function all();
	public function min($field);
	public function max($field);
	public function avg($field);
	public function sum($field);
	public function count($field, $data = null);
	public function deleteAll($table);
}
