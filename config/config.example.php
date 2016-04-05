<?php
/**
 * @author Fábio Assunção - fabio@fabioassuncao.com.br
 * @version 0.0.1
 * @date February 06, 2016
 * @date updated April 05, 2016
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
 * The key length must be at least 256bit / 32 characters
 * Exemple: a9e83e7d2b4638ff200ba1a2b925c424e623420a
 */
define('APP_KEY', '<YOUR KEY HERE>');

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
