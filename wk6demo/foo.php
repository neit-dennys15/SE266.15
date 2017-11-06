<?php
/**
 * Created by PhpStorm.
 * User: 005104592
 * Date: 11/6/2017
 * Time: 11:36 AM
 */
$file = file_get_contents("https://www.cnn.com");
echo preg_match_all('/Trump/', $file, $matches, PREG_OFFSET_CAPTURE);
print_r($matches);


//$greps = preg_grep('/Trump/', $file);
/* grabbing a primary key for a foreign key reference
$db = get my db
$sql = "INSERT INTO foo VALUES (null, 'Clark', 'Alexander');
$stmt = $db-> prepare($sql);
bind params as necessary
$stmt->execute();
$pk = $db->lastInsertID(); // will get me the last primary key inserted

*/
