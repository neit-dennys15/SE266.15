<?php

require_once ("Assets/dogs.php");
require_once ("Assets/dbconn.php");
include_once ("Assets/header.php");
$db = dbconn();
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? " ";
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? " ";
$gender = filter_input(INPUT_POST, 'gender', FILTER_VALIDATE_REGEXP,
        array(
                "options"=>array("regexp"=>'/^[MF]$/')
        )
    ) ?? "";
$fixed = filter_input(INPUT_POST, 'fixed', FILTER_VALIDATE_BOOLEAN) ?? false;
$id = filter_input(INPUT_POST,'id', FILTER_VALIDATE_INT);
$button = "Add";
switch ($action){
    case "Add":
        addDog($db, $name, $gender, $fixed);
        $button = "Add";
        break;
    case "Delete":
        break;
    case "Edit":
        $button = "Update";
        $dog = getDog($db, $id);
        break;
    case "Update":
        break;
}
echo getDogsAsTable($db);
include_once  ("Assets/dogform.php");
include_once ("Assets/footer.php");
?>