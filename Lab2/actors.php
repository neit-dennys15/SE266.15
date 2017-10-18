<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/18/2017
 * Time: 2:59 PM
 */

function getActorsAsTable($db){
    try{
        $sql = $db->prepare("SELECT * FROM actors");
        $sql->execute();
        $actors = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ( $sql->rowCount () > 0){
            $table = "<table>" . PHP_EOL;
            foreach ($actors as $actor){
                $table .= "<tr><td>" . $actor['firstname'];
                $table .= "</td><td>" . $actor['lastname'];
                $table .= "</td><td>" . $actor['dob'];
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
function addActor($db, $firstname, $lastname, $dob, $height) {
    try {
        $sql = $db->prepare("INSERT INTO actors VALUES (null, :firstname, :lastname, :dob, :height)");
        $sql->bindParam(':firstname', $firstname);
        $sql->bindParam(':lastname', $lastname);
        $sql->bindParam(':dob', $dob);
        $sql->bindParam(':height', $height);
        $sql->execute();
        return $sql->rowCount();
    }catch(PDOException $e){
        die("There was a problem giving birth to the puppy");
    }
}