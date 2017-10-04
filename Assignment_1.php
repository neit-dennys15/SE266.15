<?php

//Open Table
$table = "<table>";

//Outer For-Loop to create rows
for($rows = 1; $rows <= 10; $rows++){

//Open Table row tag
    $table .= "\t<tr>";

    //Inner For-Loop to create columns
    for($cols = 1; $cols <= 10; $cols++){

        //Create Accumulator Variable
        $randNumStr = "";

        //Inner For-Loop to generate random hex values
        for($randHex = 1; $randHex <= 6; $randHex++ ){
            //Use dechex function to convert decimal values to hexadecimal values
            $randNum = dechex(mt_rand(0,15));

            //Add the random number to the Accumulator
            $randNumStr .= $randNum;
        }
//Output the table
        $table .= "<td style='background-color: #$randNumStr; width: 100px; height: 100px; text-align:center; font-size: 20px;'> $randNumStr <br> <span style='color:white;'> $randNumStr</span></td>";

    }
//Close the table row tag
    $table .= "</tr>\n";
}

//Close Table
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