<?php

/**
 * Start Require connection 
 */
require("controller/UserController.php");
$user = new UserController();

/**
 * End Require connection 
 */

/**
 * #Start delete data section
 * (global variable) array $_GET
 */

if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $user->deleteuser($deleteid);
    header("location:user-list.php");
} //if isset close

/**
 * #End delete data section
 * (global variable) array $_GET
 */
