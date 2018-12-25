<?php

include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	 
	 <!-- CSS -->
		<link rel="stylesheet" href="index.css">
		
		<script>
		  var seconds = 05;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             //form1 is your form name
            document.form1.submit();
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
		</script>
		
		<style>
		.timer {
    width: 100px;
    font-size: 2.5em;
    text-align: center;
}
</style>

</head>
<body>
<div class="container">


	<br> <h1 class="text-center text-primary"> Presidency University Entrance Test (PUEE) </h1><br>
	
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION["uname"]; ?> </h2> <br>
	
	
	<!-- <div>
	
	<div class="timer">
            <time id="countdown">0:05</time>
        </div>
<form action="check.php?quizcheck=quizcheck[]" name="form1" id="form1">
</form>

	</div>  -->
<div class="zoom">
	<div class="card" >


		<h3 class="text-center card-header">  Welcome <?php echo $_SESSION['uname']; ?>, you have to select only one out of 3. Best of Luck :)  </h3>

	 </div><br>

	 <form action="check.php" method="post">

	 <?php

	 for($i=1 ; $i < 4 ; $i++){
	 $q = " select * from questions where qid = $i";
	 $query = mysqli_query($con, $q);

	 while ($rows = mysqli_fetch_array($query) ) {
	 	?>
	 	
	 	<div class="card">
	 		<h4 class="card-header"> <?php echo $rows['question']  ?>  </h4>


	 		<?php
	 			 $q = " select * from answers where ans_id = $i";
				 $query = mysqli_query($con, $q);

				 while ($rows = mysqli_fetch_array($query) ) {
				 	?>

				 	<div class="card-body">
				 		
				 		<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>"> 
				 		<?php echo $rows['answer']; ?>

				 	</div>

<?php
	 }
	 }
	}

	 ?>


	 <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success btn-block">

</form>
</div>
</div><br><br>
<br><br>
	<div class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary " role="button"> LOGOUT </a>
	</div><br>

	<!--<div>
		<h5 class="text-center">  ©2018 Presidency University </h5>
	</div><br><br>   -->


	
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