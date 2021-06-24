<!DOCTYPE html>
<html>

<head>
    <title>Register Member</title>
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
                <?php if (isset($_SESSION["EMAIL"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href=""><?php $_SESSION["EMAIL"] ?></a>
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
        <div class="insertUser-form">
            <div class="main-div">
                <h4 style="margin-top:135px; color: white; text-align: center">W E L C O M E !</h4>
                <h3 style="color: white; text-align: center">Fill in your data</h3><br>
                <form action="process/processInsertUser.php" method="POST">
                    <div class="container" style="color: white">
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
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