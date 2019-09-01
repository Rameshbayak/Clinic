<?php

include 'conn.php';

$did = $_GET['did'];

$q = " DELETE FROM `doctor` WHERE did = $did ";

mysqli_query($con, $q);

header('location:display.php');

?>