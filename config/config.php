<?php
/**
 * @author Fábio Assunção - fabio@fabioassuncao.com.br
 * @version 1.0
 * @date February 06, 2016
 * @date update March 14, 2016
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 * development
 * production
 *
 */
define('ENVIRONMENT', 'development');

/**
 * Define relative base path.
 */
define('DIR', '/');

/**
 * System path
 */
define('SYSTEM_PATH', 'Babita');

/**
 * Application path
 */
define('APPLICATION_PATH', 'application');

/**
 * Errors log path
 */
define('ERRORS_PATH', 'log/error');

/**
 * Models path
 */
define('MODELS_PATH', 'application/Models');

/**
 * Views path
 */
define('VIEWS_PATH', 'application/Views');

/**
 * Templates path
 */
define('TEMPLATES_PATH', 'application/Templates');

/**
 * Controllers path
 */
define('CONTROLLERS_PATH', 'application/Controllers');

/**
 * Modules path
 */
define('MODULES_PATH', 'application/Modules');

/**
 * Languages path
 */
define('LANGUAGES_PATH', 'application/Languages');

/**
 * Set default controller for legacy calls.
 */
define('DEFAULT_CONTROLLER', 'welcome');

/**
 * Set default method for legacy calls.
 */
define('DEFAULT_METHOD', 'index');

/**
 * Set the default template.
 */
define('TEMPLATE', 'default');

/**
 * Set a default language.
 */
define('LANGUAGE_CODE', 'pt_BR');

/**
 * Set private key for encryption and decryption.
 */
define('APP_KEY', 'a9e83e7d2b4638ff200ba1a2b925c424e623420a');

/**
 * Optional create a constant for the name of the site.
 */
define('SITETITLE', 'Babita SMVC');

/**
 * Set timezone.
 */
define('TIMEZONE', 'America/Sao_Paulo');

/**
 * Set User agent
 */

define('USER_AGENT', 'BABITA PHP Framework Agent');
