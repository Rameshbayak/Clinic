<?php

  include 'conn.php';

  if(isset($_POST['done'])){

      $did = $_GET['did'];
      $A = $_POST['dname'];
      $B = $_POST['specialist'];
      $C = $_POST['nmcno'];
      $D = $_POST['hospital'];
      $E = $_POST['rtopic'];
      $F = $_POST['rdetails'];
      $G = $_POST['experince'];
      $H = $_POST['fdate'];
      $I = $_POST['todate'];

 $q = " update doctor set did=$did, dname='$A', specialist='$B', nmcno='$C', hospital='$D', rtopic='$E', rdetails='$F', experince='$G',fdate='$H',todate='$I' where did=$did  ";

  $query = mysqli_query($con,$q);

  header('location:display.php');
 }

?>
