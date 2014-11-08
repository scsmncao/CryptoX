<!DOCTYPE html>
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
                            <li><a href = "signin.php"><?php
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
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <center><img src="./images/world.png" height = "500px" class = "rotate"></center>
            </div>
              <div class="col-md-3">
              </div>
              <div class="col-md-5">
                <form action="payment.php" method="post">
                    <br><br><br><center><h2>Deposit BTC to this Address</h2></center><br>
<!--
                <p><input type="text" class="form-control input-lg" placeholder="Enter USD amount..." style="text-align:center;" name="amount" autofocus /></p>
                <p><button class="form-control btn-success">Join</button></p>
-->
                <center><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=bitcoin:1N8Li9kbASUqjvPLNdXDX4NgNNDB4R48Rk" /></center>
                <center style="font-size:1.5em"><br>1N8Li9kbASUqjvPLNdXDX4NgNNDB4R48Rk</center>
                    
                    
                    <br><br><br><br><center><h2>Deposit USD using Stellar</h2></center><br>
<!--
                <p><input type="text" class="form-control input-lg" placeholder="Enter USD amount..." style="text-align:center;" name="amount" autofocus /></p>
                <p><button class="form-control btn-success">Join</button></p>
-->
                <center style="font-size:1.5em"><br>Account: <b>cryptoX</b> with destination tag <b>582</b></center>
            </form>
              </div>
            </div>
        </div>

    <script>  
        $(document).ready(function(){
            $("#features").fadeIn(1500);
            $("#world").popover({
                placement : 'bottom'
            });
            $("#world2").popover({
                placement : 'bottom'
            });
            $("#world3").popover({
                placement : 'bottom'
            });
        }); 
    </script> 
    </body>
</html>