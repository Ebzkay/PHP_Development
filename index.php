<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $myFile = "test.txt";
        $fh = fopen($myFile, 'r')or die("can't open file");
        
        $theData = fread($fh, filesize($myFile));
        fclose($fh);
        echo $theData;
        $arr = ARRAY("damn" => "*", "freaking" => "**");
        $changestr = str_replace("freaking", $arr["freaking"], $theData);
        echo "<br>";
        echo "$changestr";


        ?>
    </body>
</html>
