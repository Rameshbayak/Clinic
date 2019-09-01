<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Clininc Info </h1>
 </div><br>
<?php

  include 'conn.php'; 
 $q = "select * from clinic ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>

 <label for="exampleFormControlSelect2"> Cid: </label>
 <input type="text" name="cid" id="id_name" class="form-control" disabled placeholder="company" value="<?php echo $res['cid']; ?>"/> <br>

 <label> Clinic Name: </label>
 <input type="text" name="name" id="id_name" class="form-control" value="<?php echo $res['name']; ?>"/> <br>

  <label> Address: </label>
 <input type="text" name="address" class="form-control" value="<?php echo $res['address'];  ?> "> <br>

  <label> Contact No: </label>
 <input type="text" name="contactno" class="form-control" value="<?php echo $res['contactno'];  ?> "> <br>

 <label> Website: </label>
 <input type="text" name="website" class="form-control" value="<?php echo $res['website'];  ?> "> <br>

  <label> Email: </label>
 <input type="email" name="email" class="form-control" value="<?php echo $res['email'];  ?>"> <br>

 <label> Locations: </label>
 <input type="text" name="locations" class="form-control" value="<?php echo $res['locations']; ?>"> <br>
 <?php
}
?>

  <button class="btn btn-success" type="submit" name="done"> Update echo "<script>alert('Successfully Updated !');
 window.location.href='display.php'; </script>"; </button><br>

  </div>
 </form>
 </div>
</body>
</html>