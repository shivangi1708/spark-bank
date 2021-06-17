

<!<!doctype html>
<html lang="en">
<head>
  <title>Customer Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    body {
  background-image: url('images/bg.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
    
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">SPARK BANK</a>

  <ul class="navbar-nav ml-auto">
    
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Services
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="history.php">Transaction History</a>
        <a class="dropdown-item" href="customerdetails.php">Customer Details</a>
        <a class="dropdown-item" href="customer.php">Transfer Money</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>

    

  </ul>
</nav>
    <br><br><br>
     <?php
     require 'includes/common.php';
     $sql = "SELECT * FROM users";
     $result = mysqli_query($con,$sql);
 ?>

    <b> <center><h2>CUSTOMER DETAILS</h2>  <a href="index.php"><button type="button" class="btn btn-default "><span class="glyphicon glyphicon-circle-arrow-left"></span></button></a></center> </b>
 <br>    
 <div class="container"> 
  <table class="table table-hover ">
    <thead>
      <tr>
        <th>Userid</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Balance</th>
      </tr>
    </thead>
    <tbody>
        <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
      <tr>
        <td><?php echo $rows['id'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td> <?php echo $rows['phone'] ?> </td>
        <td> <?php echo $rows['balance'] ?> </td>
       
      </tr>

      <?php
                    }
                ?>
    </tbody>
  </table>
</div>



</body>
</html>
