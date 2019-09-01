<?php

if(isset($_POST['done'])){

      $A = $_POST['services'];
      $B = $_POST['contents1'];
      $C = $_POST['contents2'];
      $D = $_POST['contents3'];
      $E = $_POST['contents4'];
    require_once 'conn.php';
  $q = " INSERT INTO `services`(`services`, `contents`) VALUES ('$A', '$B')";
  $r = " INSERT INTO `services`(`services`, `contents`) VALUES ('$A', '$C')";
  $s = " INSERT INTO `services`(`services`, `contents`) VALUES ('$A', '$D')";
  $t = " INSERT INTO `services`(`services`, `contents`) VALUES ('$A', '$E')";

  $query = mysqli_query($con, $q) && mysqli_query($con, $r) &&  mysqli_query($con, $s) && mysqli_query($con, $s);
   echo "<script>alert('Successfully Saved !');
 window.location.href='display.php'; </script>";
}

}

?>