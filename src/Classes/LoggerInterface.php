<?php
/**
 * @author     : JIHAD SINNAOUR
 * @package    : FloatPHP
 * @subpackage : Interfaces Classes Component
 * @version    : 1.0.1
 * @category   : PHP framework
 * @copyright  : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link       : https://www.floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Classes;

interface LoggerInterface
{
    /**
     * @param string $path
     * @param string $filename
     * @param string $extension
     */
    function __construct($path, $filename, $extension);

    /**
     * @param string $message
     * @return void
     */
    function error($message = '');

    /**
     * @param string $message
     * @return void
     */
    function warning($message = '');

    /**
     * @param string $message
     * @return void
     */
    function info($message = '');

    /**
     * @param string $message
     * @param string $type
     * @return void
     */
    function custom($message = '', $type = 'custom');

    /**
     * @param string $message
     * @param int $type 0
     * @param string $path
     * @param string $headers
     * @return void
     */
    function log($message = '', $type = 0, $path = null, $headers = null);
}
