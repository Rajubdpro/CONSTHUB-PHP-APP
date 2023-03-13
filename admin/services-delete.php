<?php

/**
 * Start Require connection 
 */
require("controller/ServicesController.php");
$services = new ServicesController();

/**
 * End Require connection 
 */

/**
 * #Start delete data section
 * (global variable) array $_GET
 */

if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $services->deleteservices($deleteid);
    header("location:services-list.php");
} //if isset close

/**
 * #End delete data section
 * (global variable) array $_GET
 */
