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
                        <li><a href="index.php">Planets</a></li>
                          </ul>
                        </li>
                      </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="profile.php"><?php
                                session_start();

                                if ($_SESSION['userstatus']) {
                                    echo $_SESSION['username'];
                                }
                            ?></a></li>
                            <li><a href = "session.php?redirect_to= index.php">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
          <h1 align ="center">Create a Planet</h1>
        </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <img src="./images/world.png" height = "450px" class = "rotate">
                </div>
                  <div class="col-md-2">
                      </div>
                <div class="col-md-3">
                  <h3>Investment Vehicles</h3> 
                    <div class="btn-group">
                        <div class="btn-group">
                      <select class="form-control" id = "currency">
                        <option value="one">BTC</option>
                        <option value="two">DRK</option>
                        <option value="three">DOGE</option>
                        <option value="four">PPC</option>
                        <option value="five">XPM</option>
                        </select>
                            <br><br>
                        <select class="form-control" id = "currency">
                        <option value="one">BTC</option>
                        <option value="two">DRK</option>
                        <option value="three">DOGE</option>
                        <option value="four">PPC</option>
                        <option value="five">XPM</option>
                        <option value="five">Bonds</option>
                        <option value="five">GOOG</option>
                        <option value="five">APPL</option>
                        <option value="five">USD</option>
                        <option value="five">FB</option>
                            
                        </select>
                            <br><br>
                        <select class="form-control" id = "currency">
                        <option value="one">BTC</option>
                        <option value="two">DRK</option>
                        <option value="three">DOGE</option>
                        <option value="four">PPC</option>
                        <option value="five">XPM</option>
                        <option value="five">Bonds</option>
                        <option value="five">GOOG</option>
                        <option value="five">APPL</option>
                        <option value="five">USD</option>
                        <option value="five">FB</option>
                        </select>
                            <br><br>
                        <select class="form-control" id = "currency">
                        <option value="one">BTC</option>
                        <option value="two">DRK</option>
                        <option value="three">DOGE</option>
                        <option value="four">PPC</option>
                        <option value="five">XPM</option>
                        <option value="five">Bonds</option>
                        <option value="five">GOOG</option>
                        <option value="five">APPL</option>
                        <option value="five">USD</option>
                        <option value="five">FB</option>
                        </select>
                            <br><br>
                        <select class="form-control" id = "currency">
                        <option value="one">BTC</option>
                        <option value="two">DRK</option>
                        <option value="three">DOGE</option>
                        <option value="four">PPC</option>
                        <option value="five">XPM</option>
                        <option value="five">Bonds</option>
                        <option value="five">GOOG</option>
                        <option value="five">APPL</option>
                        <option value="five">USD</option>
                        <option value="five">FB</option>
                        </select>
                            <br><br>
                        <select class="form-control" id = "currency">
                        <option value="one">BTC</option>
                        <option value="two">DRK</option>
                        <option value="three">DOGE</option>
                        <option value="four">PPC</option>
                        <option value="five">XPM</option>
                        <option value="five">Bonds</option>
                        <option value="five">GOOG</option>
                        <option value="five">APPL</option>
                        <option value="five">USD</option>
                        <option value="five">FB</option>
                        </select>
                            <Br><br>
                            <a type="button" class="btn btn-primary" href = "index.php">Create Planet</a>
                </div>
              </div>
            </div>
                  <div class="col-md-1">
                  </div>
              <div class="col-md-1">
                <h3>Allocation</h3>
                  <br>
                  <p>30%</p>
                  <br>
                  <form role="form">
                      <div class="form-group">
                        <input type="text" class="form-control" id="percent" placeholder="%">
                          <br><br>
                          <input type="text" class="form-control" id="percent" placeholder="%">
                          <br><br>
                          <input type="text" class="form-control" id="percent" placeholder="%">
                          <br><br>
                          <input type="text" class="form-control" id="percent" placeholder="%">
                          <br><br>
                          <input type="text" class="form-control" id="percent" placeholder="%">
                      </div>
                </div>

                  </div>
                </div>
        <script>
            $.getJSON("https://coinbase.com/api/v1/prices/spot_rate?currency=USD&callback=?", function( data ) {
              var items = [];
              $.each( data, function( key, val ) {
                items.push( "<option value ='" + key + "'>" + val + "</option>" );
              });

              $( "<ul/>", {
                "class": "currency",
                html: items.join( "" )
              }).appendTo( "body" );
            });
        </script>
    </body>
</html>