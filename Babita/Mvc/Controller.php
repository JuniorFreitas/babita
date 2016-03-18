<?php
/**
 * Controller - base controller
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
 *---------------------------------------------------------------------------------------
 */

namespace Babita\Mvc;

use Babita\Mvc\View;
use Babita\Core\I18n;

/**
 * Core controller, all other controllers extend this base controller.
 */
abstract class Controller
{
    /**
     * View variable to use the view class.
     *
     * @var string
     */
    public $view;

    /**
     * I18n variable to use the languages class.
     *
     * @var string
     */
    public $language;

    /**
     * On run make an instance of the config class and view class.
     */
    public function __construct()
    {
        /** initialise the views object */
        $this->view = new View;

        /** initialise the language object */
        $this->lang = new I18n;
    }
}
