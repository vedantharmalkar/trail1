<?php
 $dbhost = "localhost";
 $dbuser = "vedant";
 $dbpass = "(6ix51[o1!I[axrU";
 $db = "trail1";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>
