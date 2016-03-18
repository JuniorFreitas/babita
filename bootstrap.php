<?php
/**
 * @author Fábio Assunção - fabio@fabioassuncao.com.br
 * @version 1.0
 * @date February 06, 2016
 *
 * BABITA SMVC specifed directory default is '.'
 * If app folder is not in the same directory update it's path
 */
$babita = '../';

define('DS', DIRECTORY_SEPARATOR);

/** Set the full path to the docroot */
define('ROOT', realpath(dirname(__FILE__)).DS);

/** Make the application relative to the docroot, for symlink'd index.php */
if (!is_dir($babita) and is_dir(ROOT.$babita)) {
    $babita = ROOT.$babita;
}

/** Define the absolute paths for configured directories */
define('BABITA', realpath($babita).DS);
unset($babita);

/** Load configs files */

$filesConfig = include_once "configs.php";

foreach ($filesConfig as $file) {
    $filePath = BABITA.'config'.DS.$file;
    if (file_exists($filePath)) {
        require ($filePath);
    }else{
        throw new \Exception("No {$file} found, configure {$file} in config folder ({$filePath}).");
    }
}

/** load composer autoloader */
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

