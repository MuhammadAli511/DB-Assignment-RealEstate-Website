<?php
include('helper/connection.php');
session_start();
$email = $_SESSION["EMAIL"];

$query = "SELECT * FROM waiting_list WHERE email = '$email'";
$result = oci_parse($con, $query);
$r = oci_execute($result);
$row = oci_fetch_array($result);
if(oci_num_rows($result) == 1)
{
  $wait = $row["MEMBERSHIP_PLAN"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile - Estate Office</title>
  <link href="img/logo.png" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="main_page.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
    <div class="container">
      <a class="navbar-brand" href="profile.php"><img src="img/logo.png" style="width: 25%"></a>
      <ul class="navbar-nav" style="font-size: 20px">
        <li class="nav-item">
          <a class="nav-link" href="profile.php" style="padding-right: 35px">Home</a>
        </li>
        <?php if (isset($_SESSION["USERNAME"]) && $membership == 1):?>
          <li class="nav-item">
            <a class="nav-link" href="../process/processSelectPlan.php" style="padding-right: 35px">Waiting list</a>
          </li>
        <?php elseif (isset($_SESSION["USERNAME"]) && $membership == 0) : ?>
          <li class="nav-item">
            <a class="nav-link" href="formInsertMembership.php" style="padding-right: 35px">Apply</a>
          </li>
        <?php endif ?>
        <li class="nav-item">
          <a class="nav-link" style="padding-right: 35px; color: green"><?php echo $username; ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
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
  <br>

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
      </div>

      <div class="col-sm-3">
        <h2 class="mt-4">Contact Us</h2>
        <address>
          <strong>Estate Office</strong>
          <br>talhazeb@gmail.com
          <br>ali@gmail.com
          <br>saroosh@gmail.com
        </address>
      </div>

    </div>

    <br><br>

</body>

</html>