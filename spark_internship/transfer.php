<?php include'navbar.php';
?>  
<?php 
  include 'config.php';
  if(isset($_POST['submit']))
  {
  $from=$_GET['id'];
  $to=$_POST['user'];
  $amount=$_POST['amount'];
  $sql="SELECT * FROM users where id='$to'";
   $query=mysqli_query($conn,$sql);
   $sql1=mysqli_fetch_array($query);

   $sql="SELECT * FROM users where id='$from'";
   $query=mysqli_query($conn,$sql);
   $sql2=mysqli_fetch_array($query);
  if(($amount)<0)
  {
      echo '<script type="text/JavaScript"> 
           alert("Opps!!Amount cannot be negative");
           </script>';
      
  }
  else if($amount==0)
  {
    echo '<script type="text/JavaScript"> 
         alert("Zero Value cannot be transferred.");
         </script>';
    
  }
  else if($amount > $sql2['balance'])
  {
    echo '<script type="text/JavaScript"> 
         alert("Insufficient Blance.");
         </script>';
  }
  else{
      $newbalance=$sql1['balance'] + $amount;
      $sql="UPDATE users SET balance=$newbalance WHERE id='$to'";
      mysqli_query($conn,$sql);

      $newbalance=$sql2['balance'] - $amount;
      $sql="UPDATE users SET balance=$newbalance WHERE id='$from'";
      mysqli_query($conn,$sql);

      $sender=$sql2['name'];
      $receiver=$sql1['name'];
      $sql="INSERT INTO `transaction`(`sender`,`receiver`,`amount`) VALUES ('$sender','$receiver','$amount')";
      $query=mysqli_query($conn,$sql);
      if($query){
        echo '<script type="text/JavaScript"> 
         alert("Transaction Successful");
         </script>';
      }  
      $newbalance=0;
      $amount=0; 
 }
}
  ?>
  <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transfer</title>
    <link rel="stylesheet" href="home.css" />
   
  </head>
 
<body>
    <?php
    $sid=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$sid'";
    $result=$conn->query($sql);
    $row=mysqli_fetch_assoc($result);
     ?>
<table>
    <tr>
        <th>S.NO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>BALANCE (RS.)</th>
    <tr>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['balance'];?></td>
    </tr>
    </table>
    <div class="form">
    <form method="post">
        Recepient's Name:
        <br>
        <select id="user" name="user">
            <option value="" selected disabled>Choose</option>
        <?php
           $sql="SELECT * FROM users WHERE id!='$sid'";
           $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
        ?>
           <option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
           <?php
            }
        }
        ?>
        </select>
        <br>
        Transfer Amount(Rs.):
        <br>
        <input type="text" name="amount" required>
        <br>
        <input type="submit"  name="submit" value="Transfer">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
