<?php

include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo:800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	 
	 <!-- CSS -->
		<link rel="stylesheet" href="index.css">
		
</head>
<body>
<div class="container">


	<br> <h1 class="text-center text-primary"> Presidency University Entrance Test (PUEE) </h1><br>
	
	<h2 class="text-center text-success"> Welcome <?php
	$username=$_SESSION["ac"];
	$query1 = "select * from pd where ac = '$username'";
	$result1 = mysqli_query($con, $query1);
	$row1 = mysqli_fetch_array($result1);
	echo $row1[0] ?> </h2> <br>
	
	
	<!-- <div>
	
	<div class="timer">
            <time id="countdown">0:05</time>
        </div>
<form action="check.php?quizcheck=quizcheck[]" name="form1" id="form1">
</form>

	</div>  -->
<div class="container">

	 <?php
	$query = "select * from allocate where ac = '$username'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	 ?>
	 <br><br><br><br><br><br><br><br>
	 <table class="table table-hover"> 
	 <thead class="jumbotron">
	 <tr style="color:blue; font-family: 'Nanum Myeongjo', serif; font-size: 110%;"> <td>Adhhar Card Number</td>
	 <td>Center Name</td>
	 <td>Time</td>
	 </tr>
	 </thead>
	 <tbody>
	 <tr style="color:blue; font-family: 'Nanum Myeongjo', serif; font-size: 110%;"> <td><?php echo $row[0]; ?></td>
	 <td><?php echo $row[1]; ?></td>
	 <td><?php echo $row[2]; ?></td>
	 </tr>
	 </tbody>
	 <table>
	 
</div>
</div><br><br>
<br><br>
	<div>
	<form action="logout.php" method="post">
	<input type="submit" class="btn btn-primary" value="LOGOUT" role="button"/></form>
	</div><br>

	<!--<div>
		<h5 class="text-center">  ©2018 Presidency University </h5>
	</div><br><br>   -->


	
<br><br><br><br>
<br><br><br><br>
	</div>
	
	
	<div class="footer">
		<footer id="f">
			<div class="row">
				  <div class="col-4"><br>
						<a href="http://presidencyuniversity.in/"><span style="color:white;">PRESIDENCY UNIVERSITY</a><br>
						<span style="opacity:0.5;">Rated 4/5 based on 281 Customer reviews</span><br>
				</div>
					  
				  <div class="col-8"><br>Campus :<br>
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