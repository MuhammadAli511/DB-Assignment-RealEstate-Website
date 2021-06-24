<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Type</title>
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
                <li class="nav-item">
                    <a class="nav-link" style="padding-right: 35px; color: green"><?php echo $username; ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

    </nav>

    <br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-sm-5 my-1 float-right">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">EMPLOYEE / CIVIL SERVANT</h4>
                </div>
                <div class="card-footer text-center">
                    <a href="formInsertCivil.php" class="btn btn-primary">APPLY</a>
                </div>
            </div>
        </div>

        <div class="col-sm-5 my-1 float-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">COMPANY</h4>
                </div>
                <div class="card-footer text-center">
                    <a href="formInsertCompany.php" class="btn btn-primary">APPLY</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
</body>

</html>