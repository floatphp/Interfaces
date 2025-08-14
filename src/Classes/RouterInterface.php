<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Interfaces Classes Component
 * @version    : 1.5.x
 * @copyright  : (c) 2018 - 2025 Jihad Sinnaour <me@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file is a part of FloatPHP Framework.
 */

namespace FloatPHP\Interfaces\Classes;

interface RouterInterface
{
    /**
     * Create router from config.
     *
     * @param array $routes
     * @param string $base
     * @param array $types
     */
    function __construct(array $routes = [], string $base = '', array $types = []);

    /**
     * Retrieves all routes,
     * Useful if you want to process or display routes.
     *
     * @return array
     */
    function getRoutes() : array;

    /**
     * Add multiple routes at once from array in the following format,
     * [[method, route, controller, name, permission]].
     *
     * @param array $routes
     * @return void
     */
    function addRoutes(array $routes);

    /**
     * Set the base path.
     *
     * @param string $base
     * @return void
     */
    function setBase(string $base);

    /**
     * Add named match types.
     *
     * @param array $types
     * @return void
     */
    function addTypes(array $types);

    /**
     * Map route to target (controller),
     * (GET|POST|PATCH|PUT|DELETE),
     * Custom regex must start with an '@'.
     *
     * @param string $method
     * @param string $route
     * @param callable $controller
     * @param string $name
     * @param mixed $permission
     * @return void
     * @throws RouterException
     */
    function map(string $method, string $route, $controller, ?string $name = null, $permission = null);

    /**
     * Reversed routing,
     * Generate the URL for a named route.
     *
     * @param string $name
     * @param array @params
     * @return string
     * @throws RouterException
     */
    function generate(string $name, array $params = []) : string;

    /**
     * Match given request URL against stored routes.
     *
     * @param string $url
     * @param string $method
     * @return mixed
     */
    function match(?string $url = null, ?string $method = null);
}
