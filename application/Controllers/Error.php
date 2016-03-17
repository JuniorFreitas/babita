<?php
/**
 * Example error controller
 *
 * @author Fábio Assunção da Silva - fabioassuncao.com
 * @version 1.0
 * @date March 17, 2016
 *---------------------------------------------------------------------------------------
 */

namespace Controllers;

use Babita\Core\View;
use Babita\Core\Controller;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Error extends Controller
{

    /**
     * $error holder.
     *
     * @var string
     */
    private $error = null;

    /**
     * Save error to $this->error.
     *
     * @param string $error
     */
    public function __construct($error = "Oops! Page not found...")
    {
        parent::__construct();
        $this->error = $error;
    }

    /**
     * Load a 404 page with the error message.
     */
    public function index()
    {
        header("HTTP/1.0 404 Not Found");

        $data['title'] = '404 Not Found (Controller)';
        $data['error'] = $this->error;

        $this->view->renderTemplate('header', $data);
        $this->view->render('error/404', $data);
        $this->view->renderTemplate('footer', $data);
    }

}
