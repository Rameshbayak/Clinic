<?php

include 'conn.php';

if(isset($_POST['done'])){

 $A = $_POST['fname'];
 $B = $_POST['lname'];
 $C = $_POST['dob'];
 $D = $_POST['email'];
 $E = $_POST['password'];
 $F = $_POST['contactno'];

 $query = " INSERT INTO `patient`(`fname`, `lname`, `dob`, `email`, `password`, `contactno`) VALUES ('$A', '$B', '$C', '$D', '$E', '$F')";

  $query = mysqli_query($con,$q);
   echo "<script>alert('Successfully Saved !');
 window.location.href='display.php'; </script>";

	
}

?>