<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
<!-- <link rel="stylesheet" href="home.css" /> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include'navbar.php';?>
    <?php
include 'config.php';
$sql="SELECT * FROM users";
$result=$conn->query($sql);
?>
<table class="table">
    <thead class=" thead-dark mt-2">
        <th scope="col">S.NO</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">BALANCE (RS.)</th>
        <th scope="col">OPERATION</th>
    </thead>
  <?php
  if($result->num_rows>0)
  {
      //output data of each row
      while($row=$result->fetch_assoc()){
   ?>
   <tr>
       <td scope="row"><?php echo $row["id"];?></td>
       <td><?php echo $row["name"];?></td>
       <td><?php echo $row["email"];?></td>
       <td><?php echo $row["balance"];?></td>
       <td><a href="transfer.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-warning">Transfer Money</button></a></td>
   </tr>
   <?php
      } ?>
</table>
 <?php }
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

<?php include'footer.php';?>
</html>