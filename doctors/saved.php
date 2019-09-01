<?php

include 'conn.php';

if(isset($_POST['done'])){

      $A = $_POST['dname'];
      $B = $_POST['specialist'];
      $C = $_POST['contactno'];
      $D = $_POST['email'];
      $E = $_POST['portfolio'];
      $F = $_POST['nmcno'];
      $G = $_POST['hospital']; 
      $H = $_POST['rtopic'];
      $I = $_POST['rdetails'];
      $J = $_POST['experince'];
      $K = $_POST['fdate'];
      $L = $_POST['todate'];

  $q = " INSERT INTO `doctor`(`dname`, `specialist`, `contactno`, `email`, `portfolio`, `nmcno`, `hospital`, `rtopic`, `rdetails`, `experince`, `fdate`, `todate`)  VALUES ('$A', '$B', '$C', '$D', '$E', '$F', '$G', '$H', '$I', '$J', '$K', '$L')";

  $query = mysqli_query($con, $q);

 echo "<script>alert('Successfully Saved !');
 window.location.href='display.php'; </script>";
}

?>
