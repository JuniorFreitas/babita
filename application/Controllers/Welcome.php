<?php
/**
 * Example Welcome controller
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 *---------------------------------------------------------------------------------------
 * Modified from SMVC 2.2 - https://github.com/simple-mvc-framework/framework.git
 * @author Fábio Assunção da Silva - fabioassuncao.com
 * @version 1.0
 * @date March 13, 2016
 *---------------------------------------------------------------------------------------
 */

namespace Controllers;

use Babita\Mvc\Controller;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = _t('welcome_text');
        $data['welcome_message'] = _t('welcome_message');

        $this->view->renderTemplate('header', $data);
        $this->view->render('welcome/welcome', $data);
        $this->view->renderTemplate('footer', $data);
    }

    /**
     * Define Subpage page title and load template files
     */
    public function subPage()
    {
        $data['title'] = _t('subpage_text');
        $data['welcome_message'] = _t('subpage_message');

        $this->view->renderTemplate('header', $data);
        $this->view->render('welcome/subpage', $data);
        $this->view->renderTemplate('footer', $data);
    }
}
