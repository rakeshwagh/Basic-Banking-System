<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banking system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  </head>
  <style>
    body{
      font-family:sans-serif;
    }
    .headerMain{
      background-image:url("images/header.webp");
      background-size:cover;
      width:inherit;
      margin: 1px 0px;
      height:65vh;
    }
  </style>
  <body>
    <?php include'navbar.php';?>
    <header class="headerMain bg-darks p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="display-3">Welcome To</div>
          <span class="display-4">ABB BANK</span>
        </div>
      </div>
    </div>
    </header>
    <div class="container">
      <div class="card m-auto  shadow p-3 my-2 bg-white rounded border-secondary rounded" style="width:18rem;">
        <img class="card-img-top img-fluid" src="images/create_user.webp" class="img-fluid" alt="create user">
        <div class="card-body">
          <h5 class="card-title">Create User</h5>
          <p>For Create New User Use These...</p>
          <a href="create_user.php" class="btn btn-warning">Create</a>
        </div>
      </div>

      <div class="card m-auto shadow p-3 my-2 bg-white rounded border-secondary rounded" style="width:18rem; ">
        <img class="card-img-top img-fluid" src="images/customers.png" class="img-fluid" alt="View customers">
        <div class="card-body">
          <h5 class="card-title">View Customers</h5>
          <p>For View Our Customers Use These...</p>
          <a href="user.php" class="btn btn-warning">View</a>
        </div>
      </div>

      <div class="card m-auto shadow p-3 my-2 bg-white rounded border-secondary rounded" style="width:18rem;">
        <img class="card-img-top img-fluid" src="images/transfer2.jpg" class="img-fluid" alt="Transfer Money">
        <div class="card-body">
          <h5 class="card-title">Transfer Money</h5>
          <p>For Transfer Your Money Use These...</p>
          <a href="user.php" class="btn btn-warning">Transfer</a>
        </div>
      </div>
    </div>

  <?php include'footer.php';?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
