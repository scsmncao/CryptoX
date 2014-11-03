<!DOCTYPE html>
<html>
    
    <head>
        <title>CryptoX</title>
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
                        <li><a href="index.php">Planets</a></li>
                          </ul>
                        </li>
                      </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="profile.php">My Profile</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
          <h1 align ="center">My Worlds</h1>
          <div class = "col-md-4">
          </div>
          <div class = "col-md-4">
          <a href ="createworld.php" target ="new"><button class="btn btn-lg btn-primary btn-block" type="submit" onclick = "location.href = 'profile.php'">Create a New World</button>
          </a>
          </div>
<!--           <a href="createworld.php" target="new"><button type="button" style="float: right;" class="btn-success" data-color="info">Add a New World!</button></a> -->
        </div>
        <div class="features">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <center><img src="./Pictures/Groups.png" <!-- height = "250px" --></center>
                    </div>
                    <div class="col-md-4">
                      <center><img src="./Pictures/Groups.png" <!-- height = "250px" --></center>
                    </div>
                    <div class="col-md-4">
                      <center><img src="./Pictures/Groups.png" <!-- height = "250px" --></center>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                        <center><img src="./Pictures/Groups.png" <!-- height = "250px" --></center>

                      </div>
                    <div class="col-md-4">
                        <center><img src="./Pictures/Groups.png" <!-- height = "250px" --></center>
                      </div>
                    <div class="col-md-4">  
                        <center><img src="./Pictures/Groups.png" <!-- height = "250px" --></center>
                      </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
    </body>
</html>