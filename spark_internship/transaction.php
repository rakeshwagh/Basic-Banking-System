<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Transaction</title>
    <style>
      body
      {
          background-image:url('images/transaction.jpeg') center center no-repeat ;
      }    
    </style>
</head>
<body>
<?php
 include'navbar.php';
?> 
<?php include'config.php';
$sql="SELECT * FROM transaction";
 $result=$conn->query($sql);
 ?>
 <table class="table">
     <thead class="table thead-dark">
        <!-- <th>Sr.No</th> -->
         <th>Sender's Name</th>
         <th>Receiver's Name</th>
         <th>Amount</th>
         <th>Date</th>
     </thead>
<?php
 if($result->num_rows>0)
 {
    while($row=$result->fetch_assoc())
    {
?>
<tr>
     
    <td><?php echo $row['sender']?></td>
    <td><?php echo $row['receiver']?></td>
    <td><?php echo $row['amount']?></td>
    <td><?php echo $row['date']?></td>
</tr>
 <?php
      }
?>
</table>
 <?php 
 }
  ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<?php include'footer.php';?>
</html>