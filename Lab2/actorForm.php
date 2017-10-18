<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/18/2017
 * Time: 2:08 PM
 */

if(isset($_POST['action']))
?>

<form method="post" action="#">
    First Name: <input type="text" name="firstName" id="firstName"/><br/>
    Last Name: <input type="text" name="lastName" id="lastName"/><br/>
    Date of Birth: <input type="date" name="DOB" id="DOB" /><br/>
    Height: <input type="text" name="height" id="height" /><br/>
    <input type="submit" name="action" value="<?php echo $button; ?>"/>


</form>
