<?php
/**
 * @author Fábio Assunção - fabio@fabioassuncao.com.br
 * @version 0.0.1
 * @date February 06, 2016
 * @date updated April 04, 2016
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
 * Set settings directory
 */
define('CONFIG_DIR', ROOT.'config');

/**
 * Vendors directory
 */
define('VENDOR_DIR', ROOT.'vendor');

/**
 * System path
 */
define('SYSTEM_PATH', ROOT.'Babita');

/**
 * Application path
 */
define('APPLICATION_PATH', ROOT.'application');

/**
 * Errors log path
 */
define('ERRORS_PATH', ROOT.'storage/log/error');

/**
 * Models path
 */
define('MODELS_PATH', ROOT.'application/Models');

/**
 * Views path
 */
define('VIEWS_PATH', ROOT.'application/views');

/**
 * Templates path
 */
define('TEMPLATES_PATH', ROOT.'application/templates');

/**
 * Controllers path
 */
define('CONTROLLERS_PATH', ROOT.'application/Controllers');

/**
 * Modules path
 */
define('MODULES_PATH', ROOT.'application/Modules');

/**
 * Languages path
 */
define('LANGUAGES_PATH', ROOT.'application/Languages');

/**
 * Load configs files
 */
$filesConfig = [
    'config.php',
    'session.php',
    'database.php',
    'email.php'
];

foreach ($filesConfig as $file) {
    $filePath = CONFIG_DIR.DS.$file;
    if (file_exists($filePath)) {
        require ($filePath);
    }else{
        die("{$file} not found. Create {$file} in ".CONFIG_DIR);
    }
}

/**
 * load composer autoloader
 */
if (file_exists(VENDOR_DIR.DS.'autoload.php')) {
    require (VENDOR_DIR.DS.'autoload.php');
} else {
    die('Please install via composer.json');
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
