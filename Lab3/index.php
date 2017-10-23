<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/23/2017
 * Time: 11:58 AM
 */
require_once ("dbconn.php");
include_once ("header.php");
function getTable($db){
    try{
        $sql = $db->prepare("SELECT corp FROM corps");
        $sql->execute();
    } catch (PDOException $e){
        die("There was a problem retrieving the dogs");
    }
}

$db = dbconn();


echo getTable($db);




include_once ("footer.php");