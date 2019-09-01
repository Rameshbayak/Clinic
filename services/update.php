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
 $q = "select * from services ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>

 
 <label> Clinic Id: </label>
 <input type="text" name="cid" class="form-control" value="<?php echo $res['cid']; ?>"> <br>

  <label> Services: </label>
 <input type="text" name="services" class="form-control" value="<?php echo $res['services']; ?>"> <br>

  <label> Contents: </label>
 <input type="text" name="contents" class="form-control" value="<?php echo $res['contents']; ?>"> <br>

 <?php

  }
  ?>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>