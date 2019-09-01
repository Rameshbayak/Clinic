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
 
 <form method="post" action="savetodata.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Clinic Information </h1>
 </div><br>

  <label> Clinic Name: </label>
 <input type="text" name="name" class="form-control"> <br>

  <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

  <label> Contact No: </label>
 <input type="text" name="contactno" class="form-control"> <br>

 <label> Website: </label>
 <input type="text" name="website" class="form-control"> <br>

  <label> Email: </label>
 <input type="email" name="email" class="form-control"> <br>

 <label> Password: </label>
 <input type="password" name="password" class="form-control"> <br>

 <label> Locations: </label>
 <input type="text" name="locations" class="form-control"> <br>


  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>