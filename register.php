<?php
    //var_dump($_POST);
    //require("mysql.php");
    //require("cookies.php");
//INSERT INTO `cryptox`.`users` (`username`, `address1`, `address2`, `address3`, `balance1`, `balance2`, `balance3`, `cookie`) VALUES ('username', '', '', '', '0', '0', '0', 'dfasfd');
//if (!empty($_POST)) {
    //$cookie = generateCookie();
    //$result = mysql_query("INSERT INTO `cryptox`.`users` (`username`, `password`, `address1`, `address2`, `address3`, `balance1`, `balance2`, `balance3`, `cookie`) VALUES ('" . $_POST['display_name'] . "', '" . sha1($_POST['password']) . "', '', '', '', '0', '0', '0', '" . $cookie . "');");
    //var_dump($cookie);
//}
        ?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>CryptoX</title>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link href="mystyles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="js/bootstrap.min.js" rel="stylesheet">
        <script src="https://cdn.firebase.com/js/client/1.1.3/firebase.js"></script>
    </head>


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
                    <li><a href="#">Worlds</a></li>
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
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="index.php" method="get">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" onclick = register()></div>
				<div class="col-xs-12 col-md-6"><a href="signin.html" class="btn btn-success btn-block btn-lg">Sign In</a></div>
			</div>
		</form>
	</div>
    
    <script>
        var myFirebaseRef = new Firebase("https://cryptox.firebaseio.com/");
        function register() {
            myFirebaseRef.set({
                passwords: {
                    password: document.getElementById('password').value
            }
            })
        }
    </script>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    var myFirebaseRef = new Firebase("https://cryptox.firebaseio.com/");
    function register() {
        myFirebaseRef.set({
            username: document.getElementById('display_name'),
            password: document.getElementById('password')
        })
    }
</script>
</html>