<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="home.css"> -->
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="INSERT INTO users(name,email,balance) values('$name','$email','$balance')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Yaay! New Customer created');
                               window.location='user.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

<div class="container pb-4">
    <h2 class="">CREATE NEW USER HERE PLEASE!</h2>
  <div class=" container jumbotron">
    <div class="row">
      <div class="col-md-8 mx-auto">

          <form class="form" method="post">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input class="form-control" placeholder="ENTER CUSTOMER NAME" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="Email">Your Email</label>
              <input class="form-control" placeholder="ENTER EMAIL" type="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="Balance">Your Balance</label>
              <input class="form-control" placeholder="ENTER CURRENT BALANCE" type="number" name="balance" required>
            </div>
            <div>
              <input class="btn btn-primary" type="submit" value="CREATE" name="submit"></input>
              <input class="btn btn-primary" type="reset" value="RESET" name="reset"></input>
            </form>
        </div>
      </div>
    </div>
  </div>
  <div>
</div>
        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php include'footer.php';?>
</html>