<?php
 $dbhost = "localhost";
 $dbuser = "boi";
 $dbpass = "7Jcc[Lnz/Rt2af0v";
 $db = "stud";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>
