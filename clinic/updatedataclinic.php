<?php

  include 'conn.php';

  if(isset($_POST['done'])){

        $cid = $_GET['cid'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contactno = $_POST['contactno'];
        $website = $_POST['website'];
        $email = $_POST['email'];
        $locations = $_POST['locations'];

 $q = " update clinic set cid=$cid, name='$name', address='$address', contactno=$contactno, website='$website', email='$email', locations='$locations' where cid=$cid ";

  $query = mysqli_query($con,$q);

 echo "<script>alert('Successfully Updated !');
 window.location.href=''; </script>"; }

?>
