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
 
 <form method="post" action="saved.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Doctors Information </h1>
 </div><br>

  <label> Doctor Name:</label>
  <input type="text" name="dname" class="form-control" required="100"><br>

  <label>Specialist:</label>
  <input type="text" name="specialist" class="form-control" required="100"><br>

  <label>Contact Number:</label>
  <input type="text" name="contactno" class="form-control" required="100"><br>

  <label>E-mail:</label>
  <input type="email" name="email" class="form-control" required="100"><br>

  <label>Portfolio:</label>
  <input type="text" name="portfolio" class="form-control" required="100"><br>

  <label>NMC NO:</label>
  <input type="text" name="nmcno" class="form-control" required="100"><br>

  <label>Hospital:</label>
  <input type="text" name="hospital" class="form-control" required="100"><br>

  <label>Research Topics:</label>
  <input type="text" name="rtopic" class="form-control" required="100">

  <label>Research Details:</label>
  <input type="text" name="rdetails" class="form-control" required="100">

  <label>Experinece:</label>
  <input type="text" name="experince" class="form-control"><br>

  <label>From Date:</label>
  <input type="Date" name="fdate" class="form-control" required="100"><be>

  <label>To Date:</label>
  <input type="Date" name="todate" class="form-control" required="100"><br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>