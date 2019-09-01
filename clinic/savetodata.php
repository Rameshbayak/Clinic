<?php

include 'conn.php';

if(isset($_POST['done'])){

 $name = $_POST['name'];
 $address = $_POST['address'];
 $contactno = $_POST['contactno'];
 $website = $_POST['website'];
 $email = $_POST['email'];
 $locations = $_POST['locations'];

 $q = " INSERT INTO `clinic`(`name`, `address`, `contactno`, `website`, `email`, `locations`) VALUES ( '$name', '$address', '$contactno', '$website', '$email', '$locations')";

  $query = mysqli_query($con,$q);
   echo "<script>alert('Successfully Saved !');
 window.location.href='display.php'; </script>";
}
}
?>