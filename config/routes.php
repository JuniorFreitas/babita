<?php
/**
 * Routes - all standard routes are defined here.
 *
 * @author Fábio Assunção - fabio@fabioassuncao.com.br
 * @version 1.0
 * @date February 06, 2016
 */

/** Create alias for Router. */
use Babita\Core\Router;
use Babita\Helpers\Hooks;

$router = new Router();

/** Define routes. */
$router->any('/', 'Controllers\Welcome@index');
$router->any('/subpage', 'Controllers\Welcome@subPage');

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/** If no route found. */
$router->error('Babita\Core\Error@index');

/** Turn on old style routing. */
$router->fallback = false;

/** Execute matched routes. */
$router->dispatch();
