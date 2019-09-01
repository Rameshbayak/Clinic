<?php

include 'conn.php';

$cid = $_GET['cid'];

$q = " DELETE FROM `clinic` WHERE cid = $cid ";

mysqli_query($con, $q);

 echo "<script>alert('Successfully Saved !');
 window.location.href='display.php'; </script>";

?>