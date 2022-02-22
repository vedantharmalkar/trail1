<html>
<body>
<?php
include "connect.php";
if(isset($_POST['SubmitButton'])){ 
  $sid=  $_REQUEST['sid'];
  $Name =  $_REQUEST['sname'];
  $Quantity = $_REQUEST['quant_allot'];
  
  $sql = "INSERT INTO supplier 
  values( '$sid', '$Name', '$Quantity' )";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?> 
</body>
</html>
