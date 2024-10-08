<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Interfaces Classes Component
 * @version    : 1.1.0
 * @copyright  : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Classes;

interface LoggerInterface
{
    /**
     * Init logger.
     *
     * @param string $path
     * @param string $filename
     * @param string $extension
     */
    function __construct(string $path = '/', string $filename = 'debug', string $extension = 'log');

    /**
     * Set log path.
     *
     * @param string $path
     * @return object
     */
    function setPath(string $path) : self;

    /**
     * Get log path.
     * 
     * @return string
     */
    function getPath() : string;

    /**
     * Set log filename.
     *
     * @param string $filename
     * @return object
     */
    function setFilename(string $filename) : self;

    /**
     * Set log extension.
     *
     * @param string $extension
     * @return object
     */
    function setExtension(string $extension) : self;

    /**
     * Log debug message.
     *
     * @param mixed $message
     * @param bool $isArray
     * @return bool
     */
    function debug($message, bool $isArray = false) : bool;

    /**
     * Log error message.
     *
     * @param string $message
     * @return bool
     */
    function error(string $message) : bool;

    /**
     * Log warning message.
     *
     * @param string $message
     * @return bool
     */
    function warning(string $message) : bool;

    /**
     * Log info message.
     *
     * @param string $message
     * @return bool
     */
    function info(string $message) : bool;

    /**
     * Log custom message.
     *
     * @param string $message
     * @param string $type
     * @return bool
     */
    function custom(string $message, string $type = 'custom') : bool;

    /**
     * Log natif error.
     *
     * @param string $message
     * @param int $type 0
     * @param string $path
     * @param string $headers
     * @return bool
     */
    function log(string $message, int $type = 0, ?string $path = null, ?string $headers = null) : bool;
}
