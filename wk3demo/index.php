<?php

require_once ("Assets/dogs.php");
require_once ("Assets/dbconn.php");
include_once ("Assets/header.php");
$db = dbconn();
var_dump(getDogsAsTable($db));
include_once ("Assets/footer.php");
?>