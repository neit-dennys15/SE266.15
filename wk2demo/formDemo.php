<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/11/2017
 * Time: 1:21 PM
 */
/* This is a really bad example of code. Just meant to get basics across*/

$dsn= "mysql:host=localhost;dbname=dogs";
$username = "dogs";
$password = "se266";

try{
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("There was a problem connecting to the database.");
}
/*if( isset($_POST['submit']) ){
    $submit= $_POST['submit'];
}
else {
    $submit = "";
}*/

//$submit = isset($_POST['submit']) ? $_POST['submit'] : " "; //ternary
$submit = $_POST['submit'] ?? " "; // null colesence operator
if ($submit == "Do It"){
    $name = $_POST['name'] ?? " ";
    $gender = $_POST['gender'] ?? " F";
    $fixed = $_POST['fixed'] ?? false;
    try {
        $sql = $db->prepare("INSERT INTO animals VALUES (null, :name, :gender, :fixed)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':fixed', $fixed);
        $sql->execute();
        echo $sql->rowCount() . " rows inserted.";
    }catch(PDOException $e){
        die ("There was a problem retrieving the dogs");
    }
}



?>
<form method="post" action="#">
    Name: <input type="text" name="name" /><br/>
    Gender: M <input type="radio" name="gender" value="M" />
    F <input type="radio" name="gender" value="F" /><br/>
    Fixed: <input type="checkbox" name="fixed" value="T" /><br/>
    <input type="submit" name="submit" value="Do it"/>
</form>