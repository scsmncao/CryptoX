<html>
    
    <head>
        <title>CryptoX</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="./js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link href="mystyles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.firebase.com/js/client/1.1.3/firebase.js"></script>
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
                            <li><a href = <?php
                                session_start();

                                if ($_SESSION['userstatus']) {
                                    echo "profile.php";
                                }
                                else {
                                    echo "signin.php";
                                }
                            ?>><?php
                                session_start();

                                if ($_SESSION['userstatus']) {
                                    echo $_SESSION['username'];
                                }
                                else {
                                    echo "Sign in";
                                }
                            ?></a></li>
                            <li><a href=<?php
                                session_start();

                                if ($_SESSION['userstatus']) {
                                    echo "session.php?redirect_to=index.php";
                                }
                                else {
                                    echo "register.php";
                                }
                            ?>><?php
                                session_start();

                                if ($_SESSION['userstatus']) {
                                    echo "Sign Out";
                                }
                                else {
                                    echo "Register";
                                }
                            ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>
</html>