<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Interfaces Classes Component
 * @version    : 1.1.0
 * @category   : PHP framework
 * @copyright  : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Classes;

interface RouterInterface
{
    /**
     * @param array $routes
     * @param string $basePath
     * @param array $matchTypes
     */
    function __construct($routes = [], $basePath = '', $matchTypes = []);

    /**
     * @return array
     */
    function getRoutes();

    /**
     * @param array $routes
     * @return void
     */
    function addRoutes($routes);

    /**
     * @param string $basePath
     * @return void
     */
    function setBasePath($basePath);

    /**
     * @param array $matchTypes
     * @return void
     */
    function addMatchTypes($matchTypes);

    /**
     * @param string $routeName
     * @param array @params
     * @return string
     * @throws Exception
     */
    function generate($routeName, $params = []);

    /**
     * @param string $requestUrl
     * @param string $requestMethod
     * @return array|boolean
     */
    function match($requestUrl = null, $requestMethod = null);
}
