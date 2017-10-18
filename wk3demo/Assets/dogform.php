<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 10/16/2017
 * Time: 1:14 PM
 */
?>
<form method="post" action="#">
    Name: <input type="text" name="name" value="<?php echo $dog['name']; ?>" /><br/>
    Gender: M <input type="radio" name="gender" value="M" checked = 'checked' />
    F <input type="radio" name="gender" value="F" /><br/>
    Fixed: <input type="checkbox" name="fixed" value="true" /><br/>
    <input type="submit" name="action" value="<?php echo $button; ?>"/>
</form>
