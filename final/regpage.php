<!DOCTYPE html>
<html>
<head>
	<title>PULIBUKT|Register</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
			<a href="index.html" class="logo">PULIBUKT</a>
			<div class="acc">
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="regpage.php">Register</a></li>
				</ul>
			</div>
			<div class="bot_head">
				<div class="srch">
					<form class="form-inline " >
			  				<input class="form-control mr-sm-2" type="Search" placeholder="Search">
						<button class="btn btn-success" type="submit">Search</button>
						</form> 
				</div>
				<div class="nav">
					<ul>
						<li class="nav-item dropdown">
      						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      						 By Genre
      						</a>
     						<div class="dropdown-menu">
        						<a class="dropdown-item" href="#">Fiction</a>
       							<a class="dropdown-item" href="#">Non-fiction</a>
        						<a class="dropdown-item" href="#">Chuchu</a>
      						</div>
	      				</li>
						<li><a href="#">New Releases</a></li>
						<li><a href="#">Best Sellers</a></li>
					</ul>
				</div>
			</div>
		</header>
	<div class="login_page">
		<form>
			<br>
			<label class="form-lbl">Register</label>
			<br><br>
			<div class="tfld">
				<input type="email" name="email_user" placeholder="Email">
				<input type="password" name="pass_user" placeholder="Password">
				<input type="password" name="conf_pass_user" placeholder="Confirm Password">
			</div>
			<ul>
				<li class="policy"><input type="checkbox" name="remem" >I have read and agree to the <a href="#" style="color: red; text-decoration: none;">Privacy Policy</a></li>
			</ul>
			<input type="submit" name="regb" value="Register">
			<p>Existing member?&nbsp<a href="login.php">Login here.</a></p>
			<a href="index.php">Home</a>
		</form>

	</div>
	<footer>
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
   				<a href="#" style="color: white;"> PULIBUKT</a>
  			</div>
	</footer>
</body>
</html>