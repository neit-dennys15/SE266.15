<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/16/2017
 * Time: 12:08 PM
 */

function dbconn()
{
    $dsn = "mysql:host=localhost;dbname=dogs";
    $username = "dogs";
    $password = "se266";

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        die("There was a problem connecting to the database.");
    }
}