<?php
/**
 * Model - the base model
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 *---------------------------------------------------------------------------------------
 * Modified from SMVC 2.2 - https://github.com/simple-mvc-framework/framework.git
 * @author Fábio Assunção da Silva - fabioassuncao.com
 * @version Babita 1.0
 * @date February 06, 2016
 *---------------------------------------------------------------------------------------
 */

namespace Babita\Core;

use Babita\Helpers\Database;

/**
 * Base model class all other models will extend from this base.
 */
abstract class Model
{
    /**
     * Hold the database connection.
     *
     * @var object
     */
    protected $db;

    /**
     * Create a new instance of the database helper.
     */
    public function __construct()
    {
        /** connect to PDO here. */
        $this->db = Database::get();
    }
}
