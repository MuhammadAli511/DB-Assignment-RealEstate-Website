<?php
if (isset($_SESSION['EMAIL'])) {
    header("location: profile.php");
}

?>
<!DOCTYPE html>
<html>

<head>

    <title>Login</title>
    <link href="img/logo.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body id="LoginForm">
    <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width:25%"></a>
            <ul class="navbar-nav" style="font-size: 20px">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="padding-right: 35px">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="padding-right: 25px">Login</a>
                </li>
            </ul>
        </div>

    </nav>
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h3>Login</h3>
                    <p>Enter Email and Password</p>
                </div>

                <form action="process/processLogin.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    <div class="reg">
                        <br>
                        <p style="font-size:15px">Don't have an account yet?</p><a href="formInsertUser.php" style="color:red; font-size: 15px"> Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


</body>

</html>