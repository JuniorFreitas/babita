<?php
/**
 * View - load template pages
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 *---------------------------------------------------------------------------------------
 * Modified from SMVC 2.2 - https://github.com/simple-mvc-framework/framework.git
 * @author Fábio Assunção da Silva - fabioassuncao.com
 * @version 1.0
 * @date February 06, 2016
 * @date updated March 17, 2016
 *---------------------------------------------------------------------------------------
 */

namespace Babita\Mvc;

/**
 * View class to load template and views files.
 */
class View
{
    /**
     * @var array Array of HTTP headers
     */
    public static $headers = [];

    /**
     * Include template file.
     *
     * @param  string $path  path to file from views folder
     * @param  array  $data  array of data
     * @param  array  $error array of errors
     */
    public static function render($path, $data = false, $error = false, $customPath = false)
    {
        self::sendHeaders();

        if($data){
            extract($data);
        }

        require ($customPath) ? "$path.php" : BABITA.DS.VIEWS_PATH.DS."$path.php";

    }

    /**
     * Get template file.
     *
     * @param  string $path  path to file from views folder
     * @param  array  $data  array of data
     * @param  array  $error array of errors
     */
    public static function get($path, $data = false, $error = false, $customPath = false) {

        if($data){
            extract($data);
        }

        $path = ($customPath) ? "$path.php" : BABITA.DS.VIEWS_PATH.DS."$path.php";

        if (is_readable($path)) {
            ob_start();
            include $path;
            return ob_get_clean();
        }

        return false;
    }

    /**
     * Return absolute path to selected template directory.
     *
     * @param  string  $path  path to file from views folder
     * @param  array   $data  array of data
     * @param  string  $custom path to template folder
     */
    public static function renderTemplate($path, $data = false, $custom = TEMPLATE, $customPath = false)
    {
        self::sendHeaders();

        if($data){
            extract($data);
        }

        require ($customPath) ? "$path.php" : BABITA.DS.TEMPLATES_PATH.DS."$path.php";
    }

    /**
     * Include template file.
     *
     * @param  string  $path  path to file from Modules folder
     * @param  array $data  array of data
     * @param  array $error array of errors
     */
    public static function renderModule($path, $data = false, $error = false)
    {
        self::sendHeaders();

        if($data){
            extract($data);
        }

        require BABITA.DS.MODULES_PATH.DS."$path.php";
    }

    /**
     * Add HTTP header to headers array.
     *
     * @param  string  $header HTTP header text
     */
    public function addHeader($header)
    {
        self::$headers[] = $header;
    }

    /**
     * Add an array with headers to the view.
     *
     * @param array $headers
     */
    public function addHeaders(array $headers = [])
    {
        self::$headers = array_merge(self::$headers, $headers);
    }

    /**
     * Send headers
     */
    public static function sendHeaders()
    {
        if (!headers_sent()) {
            foreach (self::$headers as $header) {
                header($header, true);
            }
        }
    }

}
