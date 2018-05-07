<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<link rel="stylesheet" type="text/css" href="/tubesrpl/style/style.css">
</head>
<body>
	<div class="jumbotron">
		<h1>A B O</h1>
		<h3>Aplikasi Beteng Online</h3>
	</div>

	<form action="/action_page.php">
  		<div class="container" style="width: 500px">
    		<label for="uname"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="uname" required>

    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="psw" required>
        
    		<button type="submit">Login</button>
    		<label>
      		<input type="checkbox" checked="checked" name="remember"> Remember me
    		</label>
  		</div>

  		<div class="container" style="background-color:#f1f1f1;width: 500px;">
  			<a href="/tubesrpl/Pembeli/home.php"><button type="button" class="cancelbtn">Cancel</button></a>
    		<span class="psw">Forgot <a href="#">password?</a></span>
  		</div>
	</form>

</body>
</html>