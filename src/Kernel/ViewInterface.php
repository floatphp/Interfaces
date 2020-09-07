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

namespace floatphp\Interfaces\Kernel;

interface ViewInterface
{
    /**
     * Define custom callables
     *
     * @access public
     * @param array $callables
     * @return void
     */
    function setCallables($callables = []);
    
    /**
     * Render view
     *
     * @access public
     * @param {inherit}
     * @return void
     */
    function render($content = [], $template = 'default');

    /**
     * Aassign content to view
     *
     * @access public
     * @param array $content
     * @param string $template
     * @return string
     */
    function assign($content = [], $template = 'default');
}
