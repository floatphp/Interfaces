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

namespace floatphp\Interfaces;

interface ModelInterface
{
	public function all();
	public function create();
	public function save($id);
	public function delete($id);
	public function find($id);
	public function search($fields = [], $sort = []);
	public function min($field);
	public function max($field);
	public function avg($field);
	public function sum($field);
	public function count($field);
}