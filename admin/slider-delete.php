<?php

/**
 * Start Require connection 
 */
require("controller/SliderController.php");
$slider = new SliderController();

/**
 * End Require connection 
 */

/**
 * #Start delete data section
 * (global variable) array $_GET
 */

if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $slider->deleteslider($deleteid);
    header("location:slider-list.php");
} //if isset close

/**
 * #End delete data section
 * (global variable) array $_GET
 */
