<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/18/2017
 * Time: 1:56 PM
 */
/*require_once ("Lab2/dogs.php");*/
require_once ("dbconn.php");
include_once ("header.php");
$db = dbconn();
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING) ?? " ";
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING) ?? " ";
$dob = filter_input(INPUT_POST, 'dob') ?? " ";
$height = filter_input(INPUT_POST, 'height', FILTER_SANITIZE_NUMBER_INT) ?? " ";







include_once ("footer.php");
?>