<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Did </th>
 <th> Doctors Name </th>
 <th> Specialist </th>
 <th> NMC NO </th>
 <th> Hospital </th>
 <th> Research Topics </th>
 <th> Research Details </th>
 <th> Experience </th>
 <th> Actions </th>

  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from doctor ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['did'];  ?> </td>
 <td> <?php echo $res['dname'];  ?> </td>
 <td> <?php echo $res['specialist'];  ?> </td>
 <td> <?php echo $res['nmcno'];  ?> </td>
 <td> <?php echo $res['hospital'];  ?> </td>
 <td> <?php echo $res['rtopic'];  ?> </td>
 <td> <?php echo $res['rdetails'];  ?> </td>
 <td> <?php echo $res['experince'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?did=<?php echo $res['did']; ?>" class="text-white"> Delete </a>  </button><br><br>
 <button class="btn-primary btn"> <a href="update.php?did=<?php echo $res['did']; ?>" class="text-white"> Update </a> </button> 
</td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>