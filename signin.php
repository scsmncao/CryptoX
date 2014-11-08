
<script type='text/javascript' src='helpers.js'></script>  
<?php
    //SELECT * FROM `users` WHERE `username` LIKE 'username'
    session_start();
    $_SESSION['userstatus'] = false;
    require("mysql.php");
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        $password = sha1($_POST['password']);
        $result = mysql_query("SELECT password FROM `users` WHERE username LIKE ('$username')");
        $userpass = mysql_fetch_assoc($result);
        if ($userpass['password'] == $password) {
            $_SESSION['userstatus'] = true;
            header( 'Location: profile.php' );
        }
        else {
            echo "Wrong username or password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Please sign in!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link href="mystyles.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <a class="navbar-brand" href="index.php">
                        <p>CryptoX</p>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Planets</a></li>
                      </ul>
                    </li>
                  </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="signin.php">Sign In</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      <form role="form" action = "signin.php" method = "post">
        <center><h2 class="form-signin-heading">Please Sign In </h2></center>
        <input type="text" name = "username" id = "username" class="form-control" placeholder="Username">
        <input type="password" name = "password" id = "password" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
</div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>