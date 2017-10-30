<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/30/2017
 * Time: 1:32 PM
 */
function getDepts($db){
    $sql = "SELECT * FROM departments";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $depts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $depts;
}