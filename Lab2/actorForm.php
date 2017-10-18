<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/18/2017
 * Time: 2:08 PM
 */

include_once ("header.php");

?>

<form method="post" action="#">
    First Name: <input type="text" name="firstName" id="firstname"/><br/>
    Last Name: <input type="text" name="lastName" id="lastname"/><br/>
    Date of Birth: <input type="date" name="DOB" id="dob" /><br/>
    Height: <input type="text" name="height" id="height" /><br/>
    <input type="submit" name="action" value="Add"/>


</form>

<?php

addActor($db, $firstname, $lastname, $dob, $height);
include_once ("footer.php");
?>