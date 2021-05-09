<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : FloatPHP
 * @subpackage: Interfaces Classes Component
 * @version   : 1.0.0
 * @category  : PHP framework
 * @copyright : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link      : https://www.floatphp.com
 * @license   : MIT License
 *
 * This file if a part of FloatPHP Framework
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
}
