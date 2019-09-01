<?php

  include 'conn.php';

  if(isset($_POST['done'])){

      $cid = $_GET['cid'];
      $A = $_POST['services'];
      $B = $_POST['contents'];

 $q = " update doctor set cid=$cid, dname='$A', specialist='$B', where cid=$cid  ";

  $query = mysqli_query($con,$q);

  header('location:display.php');
 }

?>