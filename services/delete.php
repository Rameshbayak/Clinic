<?php

include 'conn.php';

$cid = $_GET['cid'];

$q = " DELETE FROM `services` WHERE cid = $cid ";

mysqli_query($con, $q);

 echo "<script>alert('Successfully Deleted !');
 window.location.href='display.php'; </script>";

?>