<?php
include('helper/connection.php');
session_start();
$email = $_SESSION["EMAIL"];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Estate Office</title>
  <link href="img/logo.png" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="main_page.css">
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 25%"></a>
      <ul class="navbar-nav" style="font-size: 20px">
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="padding-right: 35px">Home</a>
        </li>
        <?php if (isset($_SESSION["EMAIL"])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="formSelectUser.php">Apply</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php endif ?>
      </ul>
    </div>

  </nav>

  <header class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        </div>
      </div>
    </div>
  </header>

  <div class="container">

    <div class="row">
      <div class="col-sm-8" style="margin-right: 50px">
        <h2 class="mt-4">About Us</h2>
        <p style="text-align: justify">
        - Provides Government owned office accommodation to the Federal Ministries & their departments.
        <br>
        - Allots Government owned residential accommodation to Federal Ministries and their employees.
        <br>
        - Manages commercial units.
        <br>
        - Recovers rent from the allottees/occupants of residential/commercial units and issuance of NOC.
        <br>
        - Cancels allotmnet from retired /expired and transferred allotees.
        <br>
        - Proposes construction of New Accommodation (Office/Residential).
        <br>
        - Maintaines/updates GWL and Litiagation cases.
        <br>
        - Ejects un-authorized occupants from government owned accommodation.
        <br>
        - Asses Private Accommodations.
        </p>
        <p>
          <a class="btn btn-danger btn-lg" href="login.php">Register Now</a>
        </p>
      </div>

      <div class="col-sm-3">
        <h2 class="mt-4">Contact Us</h2>
        <address>
          <strong>Estate Office Main</strong>
          <br>talhazeb@gmail.com
          <br>ali@gmail.com
          <br>saroosh@gmail.com
        </address>
      </div>

    </div>

    <br><br>

</body>

</html> 