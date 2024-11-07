<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Interfaces Kernel Component
 * @version    : 1.2.x
 * @copyright  : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Kernel;

interface OrmInterface
{
	/**
	 * @param string $name
	 * @param mixed $value
	 */
	function __set(string $name, $value);

	/**
	 * @param string $name
	 * @return mixed
	 */
	function __get(string $name);

	/**
	 * @param mixed $bind
	 * @param mixed $value
	 * @return object
	 */
	function bind($bind = [], $value = null) : self;

	/**
	 * @param string $table
	 * @return object
	 */
	function setTable(string $table) : self;

	/**
	 * @param string $key
	 * @return object
	 */
	function setKey(string $key) : self;

	/**
	 * @param array $data
	 * @return bool
	 */
	function create() : bool;

	/**
	 * @param int $id
	 * @return mixed
	 */
	function read($id = null);

	/**
	 * @param mixed $id
	 * @return bool
	 */
	function update($id = null) : bool;

	/**
	 * @param mixed $id
	 * @return bool
	 */
	function delete($id = null) : bool;

    /**
	 * @return int
	 */
	function lastInsertId() : int;

	/**
	 * @param string $sql
	 * @param array $bind
	 * @param string $type
	 * @param int $mode
	 * @return mixed
	 */
	function query(string $sql, ?array $bind = null, ?string $type = null, ?int $mode = null);

	/**
	 * @param mixed $columns
	 * @param array $sort
	 * @param int $limit
	 * @return mixed
	 */
	function search($columns = '*', array $sort = [], int $limit = 0);

	/**
	 * @param mixed $columns
	 * @param array $sort
	 * @return mixed
	 */
	function searchOne($columns = '*', array $sort = []);

	/**
	 * @param mixed $columns
	 * @return mixed
	 */
	function all($columns = '*');

	/**
	 * @param string $field
	 * @return mixed
	 */
	function min(string $field);
}
