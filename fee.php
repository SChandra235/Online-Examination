<?php
if(isset($_POST['submit'])){
	?>
	<script type='text/javascript'>alert('Request Sent');
		function newDoc() {
    window.location.assign("index.html")
}newDoc();</script>";
<?php }
?> 
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Fee Status</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		
		
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">	
		
		
		
		
	<style>
	body { margin: 0 0 0; }
	
	#logo {
		height: 100px;
		width: 500px;
	}
	#data {
		border-style: inset;
		font-family: 'Slabo 27px', serif;
		
	}
	#p {
		background-color: navy;
		color: white;
	}
	.button {
		color: blue;
	}
	
	.footer {
	    left: 0;
	    bottom: 0;
	    width: 100%;
	    background-color:  black;
	    color: white;
	    text-align: center;
	}
	.fixed-bottom {
		margin: 0 0 0;
	}
	</style>	
	</head>	
	<body>
	

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	<div class="container" id="logo">
			<div><img src="image/pu.svg"></div>
	</div>
	<br><br><br><br><br>
	<div class="container">
		<div id="data">	
			<div id="p">
				<p style="margin-left: 1em;"><b>Make Payment: </b></p></div>
				
				
				<form action="add_fee.php" name="myForm" method="post" class="form-group">

					<center><div>
						<label><b>Federal Bank Payment System</b> | Make Payment<br><b>Merchant Name : PRESIDENCY UNIVERSITY (PUN)- NEW REGISTRATION <br>
							Reference Number : 18781536140<br> Amount : &#8377; 2050 /- </label>
						<br><br>Enter Your Payment Reference Number (PRN):</b><input type="text" class="form-control" name="prn"required/>
					<br>
					<br>
					<p><input type="submit" name="submit" class="btn btn-lg btn-primary" value="Submit"></p></div></center>

				</form>

				
			
	
			
		</div>
		
		</div><br><br><br><br><br><br><br><br><br>
		<div class="footer" class="fixed-bottom">
		<footer class="container" id="f">
			<div class="row">
				  <div class="col-4"><br>
						<a href="http://presidencyuniversity.in/"><span style="color:white;" >PRESIDENCY UNIVERSITY</a><br>
						<span style="opacity:0.5;">Rated 4/5 based on 281 Customer reviews</span><br>
				</div>
					  
				  <div class="col-8" ><br>Campus :<br>
							Presidency University,
							Itgalpur, Rajanakunte,
							Yelahanka,
							Bengaluru 560064
							Karnataka, India.
				</div>
				<div class="col-12"><hr>&copy; 2018, PRESIDENCY UNIVERSITY. ALL RIGHTS RESERVED.
					<br><span style="opacity:0.5;">WEBSITE BY PRESIDENCY UNIVERSITY STUDENTS</span></div>
			</div>
		</footer>
		</div>
	
	
	
	
		
	</body>
</html>