
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				<style>
		.footer_menu{
	width:100%;
	background-color:#444;
}
a{
	color:#fff;
	text-decoration:none;
}
a:hover{
	color:#fff;
	text-decoration:underline;
}
.text-justify {
  text-align: justify;
}
.decor_bg{
	color:#fff;
}
.decor_row{
	margin-top:80px; 
	margin-bottom:100px;
}
.popup{
	width:100px;
	height:100px;
	margin-left:auto;
	margin-right:auto;
	overflow:hidden;
	display:hidden;
}
.decor_anchor{
	color:#0000ff;
}
.decor_anchor:hover{
	text-decoration:underline;
	color:#444;
}
</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container-fluid">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a class="navbar-brand" href="DStore.php">DStore</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="#myModal" role="button" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
							<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>			<div class="row" style="margin-top:80px;">
				<div class="container text-justify">
					<div class="col-lg-10">
						<h2>LIVE SUPPORT</h2>
						<h4>24 hours | 7 days a week | 365 days a year    Live Technical Support</h4>
						<p>This is a Online Support Web Link. SO that the Users can clarify there doubts regarding anything. If not satisfied or Any probelm with your problem fill up the 
						below form along with the message your Technical team will be on it within minutes.</p>
					</div>
					<div class="col-lg-2">
						<center><img src="contact.png" alt="Contact Us"/></center>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-lg-8" style="margin-bottom:10px;">
						<h2>CONTACT US</h2>
						<form role="form" action="contact_script.php" method="POST">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" required = "true">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input class="form-control" name="e-mail" required = "true">
															</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="5" name="message" required = "true"></textarea>
							</div>
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-lg-4">
						<h2>Company Information :</h2>
						<p>DStore E-Commerce Ltd.</p>
						<p>649 East Prescott Road, Salina, KS 67401,</p>
						<p>USA</p>
						<p>Phone:(00) 222 666 444</p>
						<p>Fax: (000) 000 00 00 0</p>
						<p>Email: info@dstore.com</p>
						<p>Follow on: Facebook, Twitter<p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-123-3422234</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="color:#000;">LOGIN to
						<img src="DStore.png" style="margin-left=30px;margin-bottom:0px;" width=200px height=95px /> </h3>
					</div>
					<div class="modal-body">
						<p>Don't have an account? <a href="" style="color:#0000ff;">Register</a></p>
						<form role="form" action="login_script.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
							</div>
						    <button type="submit" name="submit" class="btn btn-primary">Login</button>
						</form><br/>
						<a href="" style="color:#0000ff">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End of myModal -->		</div>
	</body>
</html>