<?php
$table = "<table>";
for($rows = 1; $rows <= 10; $rows++){


    $table .= "\t<tr>";
        for($cols = 1; $cols <= 10; $cols++){
            $randNumStr = "";
            for($randHex = 1; $randHex <= 6; $randHex++ ){
                $randNum = dechex(mt_rand(0,15));
                $randNumStr .= $randNum;
            }

            $table .= "<td style='background-color: #$randNumStr; width: 100px; height: 100px; text-align:center; font-size: 20px;'> $randNumStr <br> <span style='color:white;'> $randNumStr</span></td>";

        }

    $table .= "</tr>\n";
}

$table .= "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $table; ?>
</body>
</html>