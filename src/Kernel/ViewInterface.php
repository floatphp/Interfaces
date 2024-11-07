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

interface ViewInterface
{
	/**
	 * Set extended view callables.
	 *
     * @param CallableInterface $callable
	 * @return void
	 */
	function setCallables(?CallableInterface $callable = null);

    /**
     * Render view.
     *
     * @param string $tpl
     * @param array $content
     * @param bool $end
     * @return void
     */
    function render(string $tpl = 'default', array $content = [], bool $end = false);

    /**
     * Aassign content to view.
     *
     * @param string $tpl
     * @param array $content
     * @return string
     */
    function assign(string $tpl = 'default', array $content = []) : string;
}
