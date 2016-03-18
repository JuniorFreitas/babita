<?php
/**
 * @author Fábio Assunção - fabio@fabioassuncao.com.br
 * @version 1.0
 * @date February 06, 2016
 * @date updated March 18, 2016
 *
 * Bootstrap of BABITA SMVC
 */

/**
 * Alias for DIRECTORY_SEPARATOR
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * Set the full path to the docroot
 */
define('ROOT', realpath(dirname(__FILE__)).DS);

/**
 * Define the absolute paths for configured directories
 */
define('BABITA', ROOT);

/**
 * Load configs files
 */
$filesConfig = include_once "configs.php";
foreach ($filesConfig as $file) {
    $filePath = BABITA.'config'.DS.$file;
    if (file_exists($filePath)) {
        require ($filePath);
    }else{
        throw new \Exception("No {$file} found, configure {$file} in config folder ({$filePath}).");
    }
}

/**
 * load composer autoloader
 */
if (file_exists(BABITA .'vendor'.DS.'autoload.php')) {
    require (BABITA.'vendor'.DS.'autoload.php');
} else {
    throw new \Exception('Please install via composer.json');
}

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */
if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            error_reporting(E_ALL);
            break;
        case 'production':
            error_reporting(0);
            break;
        default:
            exit('The application environment is not set correctly.');
    }

}

/**
 * Turn on output buffering.
 */
ob_start();

/**
 * Turn on custom error handling.
 */
set_exception_handler('Babita\Core\Logger::ExceptionHandler');
set_error_handler('Babita\Core\Logger::ErrorHandler');

/**
 * Set timezone.
 */
date_default_timezone_set(TIMEZONE);

/**
 * Start sessions.
 */
Babita\Helpers\Session::init();

