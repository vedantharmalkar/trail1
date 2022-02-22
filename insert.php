<html>
<body>
<?php
include "connect.php";
if(isset($_POST['SubmitButton'])){ 
  $rollno =  $_REQUEST['rollno'];
  $name =  $_REQUEST['sname'];
  $class = $_REQUEST['sclass'];
 
  $sql = "INSERT INTO details
  values( '$rollno', '$name','$class' )";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?> 
</body>
</html>
