<!DOCTYPE html>
<html>

<head>
    <title>Register Company</title>
    <link href="img/logo.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>

<body style="background-color: grey">
    <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 25%"></a>
            <ul class="navbar-nav" style="font-size: 20px">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="padding-right: 35px">Home</a>
                </li>
                <?php if (isset($_SESSION["NAME"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="">Membership</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>

    </nav>

    <div class="container">
        <div class="insertCompany-form">
            <div class="main-div">
                <h4 style="margin-top:135px; color: white; text-align: center">W E L C O M E !</h4>
                <h3 style="color: white; text-align: center">Fill in your data</h3><br>
                <form action="process/processInsertCivil.php" method="POST">
                    <div class="container" style="color: white">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>License No</label>
                            <input type="text" name="license_no" class="form-control" placeholder="License No">
                        </div>
                        <div class="form-group">
                            <label>Date Established</label>
                            <input type="date" name="ed" class="form-control" id="date1" placeholder="Date of Establishment">
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" name="contact_no" class="form-control" placeholder="Contact No">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" name="submit" value="Submit">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <br><br>
</body>

</html>