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
 
 <form method="post" action="saves.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Services </h1>
 </div><br>

  <label> Cid:</label>
  <input type="text" name="cid" id="cid"><br>

  <label>Services:</label>
  <input type="text" name="services" class="form-control" required="100"><br>

  <label>Contents:</label>
  <input type="text" name="contents1" class="form-control" required="100"><br>
  <input type="text" name="contents2" class="form-control" required="100"><br>
  <input type="text" name="contents3" class="form-control" required="100"><br>
  <input type="text" name="contents4" class="form-control" required="100"><br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>