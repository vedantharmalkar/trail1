<?php
 $dbhost = "localhost";
 $dbuser = "vedant";
 $dbpass = "NdW]!iAUNpH[[o@n";
 $db = "college1";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>
