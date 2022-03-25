<?php
/**
 * @author     : JIHAD SINNAOUR
 * @package    : FloatPHP
 * @subpackage : Interfaces Kernel Component
 * @version    : 1.0.0
 * @category   : PHP framework
 * @copyright  : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link       : https://www.floatphp.com
 * @license    : MIT License
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
	 * @return mixed
	 */
	function __get($name);

	/**
	 * Init database object
	 *
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
	 * @param array $bind
	 * @param array $args
	 * @return mixed
	 */
	function query($sql, $bind = null, $args = []);

	/**
	 * @param int $id
	 * @return mixed
	 */
	function save($id = 0);

	/**
	 * @param void
	 * @return int
	 */
	function create() : int;

	/**
	 * @param int $id
	 * @return int
	 */
	function delete($id = 0) : int;

	/**
	 * @param int $id
	 * @return mixed
	 */
	function find($id = 0);

	/**
	 * @param array $fields
	 * @param array $sort
	 * @return mixed
	 */
	function search($fields = [], $sort = []);

	/**
	 * @param void
	 * @return mixed
	 */
	function all();

	/**
	 * @param string $field
	 * @return mixed
	 */
	function min(string $field);

	/**
	 * @param string $field
	 * @return mixed
	 */
	function max(string $field);

	/**
	 * @param string $field
	 * @return mixed
	 */
	function avg(string $field);

	/**
	 * @param string $field
	 * @return mixed
	 */
	function sum(string $field);

	/**
	 * @param array $data
	 * @return mixed
	 */
	function count($data = null);

	/**
	 * @param string $table
	 * @return int
	 */
	function deleteAll($table) : int;

	/**
	 * @param string $table
	 * @return mixed
	 */
	function resetId($table = '');

	/**
	 * @param void
	 * @return bool
	 * @throws PDOException
	 */
	function createDatabase();
}
