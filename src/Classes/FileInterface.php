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
	/**
	 * Construct file object
	 *
	 * @param string $path null
	 */
	function __construct($path = null);

	/**
	 * Get Parent Dir
	 *
	 * @param void
	 * @return string
	 */
	function getParentDir();

	/**
	 * Get file content
	 *
	 * @param void
	 * @return string
	 */
	function getContent();

	/**
	 * Get file last access
	 *
	 * @param void
	 * @return mixed
	 */
    function getLastAccess();

	/**
	 * Get file last change
	 *
	 * @param void
	 * @return mixed
	 */
    function getLastChange();

	/**
	 * Get File Size int
	 *
	 * @param void
	 * @return int
	 */
	function getFileSize();

	/**
	 * Get File Size
	 *
	 * @param int $decimals 2
	 * @return string
	 */
	function getSize($decimals = 2);

	/**
	 * Read File & Get Content
	 *
	 * @param boolean $return false
	 * @return mixed
	 */
	function read($return = false);

	/**
	 * Write File & create folder if not exists
	 *
	 * @param string $input
	 * @return void
	 */
	function write($input = '');

	/**
	 * Add String to File
	 *
	 * @param string $input
	 * @return void
	 */
	function addString($input);

	/**
	 * Add space to file
	 *
	 * @param void
	 * @return void
	 */
	function addBreak();

	/**
	 * Delete file object
	 *
	 * @param void
	 * @return boolean
	 */
	function delete();

	/**
	 * Copy file
	 *
	 * @param void
	 * @return string $dest
	 */
    function copy($dest);

	/**
	 * Move file
	 *
	 * @param void
	 * @return boolean
	 */
    function move($dest);

	/**
	 * Check whether path is regular file
	 *
	 * @param void
	 * @return boolean
	 */
    function isFile();

    /**
     * Add directory
	 *
	 * @param string $dir
	 * @param int $mode
	 * @param boolean $recursive
	 * @return boolean
	 */
    function addDir($dir, $mode = 0755, $recursive = true);

    /**
     * Remove directory
	 *
	 * @param string $dir
	 * @return boolean
	 */
    function removeDir($dir);

    /**
     * Remove directory content
	 *
	 * @param string $dir
	 * @return boolean
	 */
    function emptyDir($dir);

	/**
	 * Check File Exists
	 *
	 * @param void
	 * @return boolean
	 */
	function exists();

	/**
	 * Check file readable
	 *
	 * @param void
	 * @return boolean
	 */
	function isReadable();

	/**
	 * Check file writable
	 *
	 * @param void
	 * @return boolean
	 */
	function isWritable();

	/**
	 * Check file empty
	 *
	 * @param void
	 * @return boolean
	 */
	function isEmpty();

	/**
	 * Read file without stream
	 *
	 * @param string $path
	 * @return mixed
	 */
	static function r($path);

	/**
	 * Write file without stream
	 *
	 * @param string $path
	 * @param string $input empty
	 * @param string $append false
	 * @return mixed
	 */
	static function w($path, $input = '', $append = false);
}
