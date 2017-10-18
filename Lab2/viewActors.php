<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/18/2017
 * Time: 2:44 PM
 */

function getActorsAsTable($db){
    try{
        $sql = $db->prepare("SELECT * FROM actors");
        $sql->execute();
        $actors = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ( $sql->rowCount () > 0){
            $table = "<table>" . PHP_EOL;
            foreach ($actors as $actor){
                $table .= "<tr><td>" . $actor['firstName'];
                $table .= "</td><td>" . $actor['lastName'];
                $table .= "</td><td>" . $actor['DOB'];
                $table .= "</td><td>" . $actor['height'];
                $table .= "</td></tr>";
            }

            $table .= "</table>" . PHP_EOL;
        }else{
            $table = "Life is sad. There are no dogs.";
        }
        return $table;
    } catch (PDOException $e){
        die("There was a problem retrieving the dogs");
    }
}