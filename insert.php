<html>
<body>
<?php
include "connect.php";
if(isset($_POST['SubmitButton'])){ 
  $rollno =  $_REQUEST['rollno'];
  $Name =  $_REQUEST['sname'];
  $address = $_REQUEST['address'];
  $phone = $_REQUEST['phone'];
  
  $sub1s1= $_REQUEST['sub1s1'];
  $sub2s1= $_REQUEST['sub2s1'];
  $sub1s2 = $_REQUEST['sub1s2'];
  $sub2s2= $_REQUEST['sub2s2'];
  $sql1 = "INSERT INTO student
  values(  '$Name', '$address', '$phone' )";
  if (mysqli_query($conn, $sql1)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
  }
  $sql2 = "INSERT INTO sem
  values( '$sub1s1','$sub2s1','$sub1s2','$sub2s2' )";
  if (mysqli_query($conn, $sql2)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  }
  
}  
?> 
</body>
</html>
