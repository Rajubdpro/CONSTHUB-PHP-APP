<?php

/**
 *  Start require section
 * require Connection.php
 */

require("../connection/connection.php");

/**
 *  End require section
 * require Connection.php
 */
class Dashbord extends Database
{

    /**
     * Start login check section
     */
    public function __construct()
    {
        new Database();
        if (!isset($_SESSION['id'])) {
            header('location:login.php');
        }
    }

    /**
     * End login check section
     */

    /**
     *  Start logout section
     */
    public function log_out()
    {
        session_unset();
        session_destroy();
        header("location:login.php");
    }
    /**
     *  End logout section
     */
}//end class
