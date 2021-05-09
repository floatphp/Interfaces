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

namespace FloatPHP\Interfaces\Kernel;

interface OrmInterface
{
	/**
	 * @param string $name
	 * @param string $value
	 */
	function __set($name, $value);

	/**
	 * @param string $name
	 * @return object|null
	 */
	function __get($name);

	/**
	 * @param array $data
	 * @return void
	 */
	function init($data = []);

	/**
	 * @param OrmQueryInterface $data
	 * @return mixed
	 */
	function select(OrmQueryInterface $data);

	/**
	 * @param string $sql
	 * @param array $params
	 * @param array $args
	 * @return mixed
	 */
	function query($sql, $params = null, $args = []);

	/**
	 * @param string $id
	 * @return array|null
	 */
	function save($id = '0');

	/**
	 * @param void
	 * @return array
	 */
	function create();

	/**
	 * @param string|int $id
	 * @return array
	 */
	function delete($id = '0');

	/**
	 * @param string $id
	 * @return void
	 */
	function find($id = '');

	/**
	 * @param array $fields
	 * @param array $sort
	 * @return array
	 */
	function search($fields = [], $sort = []);

	/**
	 * @param bool $isRow
	 * @return array
	 */
	function all($isRow = false);

	/**
	 * @param string $field
	 * @return int|null
	 */
	function min($field);

	/**
	 * @param string $field
	 * @return int|null
	 */
	function max($field);

	/**
	 * @param string $field
	 * @return int|null
	 */
	function avg($field);

	/**
	 * @param string $field
	 * @return int|null
	 */
	function sum($field);

	/**
	 * @param string $field
	 * @return int|null
	 */
	function count($field = '*', $data = null);

	/**
	 * Delete all query
	 *
	 * @param string $table
	 * @return int
	 */
	function deleteAll($table);
}
