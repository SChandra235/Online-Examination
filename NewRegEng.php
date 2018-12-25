<!DOCTYPE html>
<html lang="en">

	<head>
		<title>New Registration</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jQuery.min.js"></script>
		
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">		
		
		
		<script src="validation.js"></script>
		
		
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
	.footer {
	    left: 0;
	    bottom: 0;
	    width: 100%;
	    background-color:  black;
	    color: white;
	    text-align: center;
	}
	.red-star {
		color: red;
	}

	</style>
	</head>

	
	<body>
	

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	
	
 
	<div class="container">
	
	
	<div class="container" id="logo">
			<div><img src="image/pu.svg"></div>
	</div>	
		
		
	<p style="font-family: 'Oswald', sans-serif; word-spacing: 2.5px;"><b>Enter the required details below amd click on the 'Submit' button on the bottom of the page.<br>
	'<span class="red-star">★</span>' Fields are Mandatory.</b></p>
	
	<form name="myForm" onsubmit="return(validate());" method="post" action="signup.php" role="form">
		<div id="data">	
			<div id="p">
				<p style="margin-left: 1em;"><b> Personal Details </b></p>
			</div>
			<div style="margin-left: 1em;" id="data1">
				
					<table class="table">
						<tbody style='text-transform:uppercase' style="font-family: 'Slabo 27px', serif;">
						<tr>
						  <td>Full Name<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" class="form-control" name="userid"/></td>
						</tr>
						<tr>
						  <td>Gender<span class="red-star">★</span></td>
						  <td><select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="sex">
								  <option value="Default">--Select Gender--</option>
								  <option value="Male">Male</option>
								  <option value="Female">Female</option>
								  <option value="Non-Binary">Non-Binary</option>
					</select></td>
						</tr>
						<tr>
						  <td>Date of Birth<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="date" class="form-control" name="dob"/></td>
						</tr>
						<tr>
						  <td>Email-Id<span class="red-star">★</span></td>
						  <td><input style='text-transform:lowercase'type="email" class="form-control" name="email"/></td>
						</tr>
						<tr>
						  <td>Addhar Card Number<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" maxLength="12" class="form-control" name="ac"/></td>
						</tr>

						  <td>Father's Name<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" class="form-control" name="fn"/></td>
						</tr>
						<tr>
						  <td>Mother's Name<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="mn"/></td>
						</tr>
						<tr>
						  <td>Nationality<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" name="country" class="form-control"/></td>
						</tr>
						<tr>
						  <td>Address<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="address"/><br></td>
						</tr>
						<tr>
						  <td>City<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="cy"/></td>
						</tr>
						<tr>
						  <td>ZIP/PIN Code<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="pc"/></td>
						</tr>
						<tr>
						  <td>State<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="st"/></td>
						</tr>
						<tr>
						  <td>Mobile Number<span class="red-star">★</span></td>
						  <td><input type="text" size="1" value="+91" disabled/><input style='text-transform:uppercase' type="text" name="mob" class="form-control"/></td>
						  </tr>
						</tbody>
					</table>
				</div>
				</div><br>
			<div id="data">
				<div id="p">
					<p style="margin-left: 1em;"><b> 12th Examination Details</b> </p>
				</div>
				<table class="table">
					<tbody style='text-transform:uppercase' style="font-family: 'Slabo 27px', serif;">
						<tr>
						  <td>Institution <br>Last attended.<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" name="il" class="form-control"/></td>
						</tr>
						<tr>
						  <td>Examination</td>
						  <td>12th Year or It's Equivalent</td>
						</tr>
						<tr>
						  <td>Examination board<span class="red-star">★</span></td>
						  <td>
        <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="sb">
	  <option value="Default">--Select Board--</option>
      <option value="C.B.S.E.">Central Board of Secondary Education (CBSE)</option>
      <option value="I.C.S.E.">The Indian Certificate of Secondary Education (ICSE)</option>
      <option value="State Board">State Board</option>
    </select>
  </td>
						</tr>
						<tr>
						  <td>Year of Passing/Apperaing<span class="red-star">★</span></td>
						  <td> <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="yp">
								  <option value="Default">--Select Year--</option>
								  <option value="2018">2018</option>
								  <option value="2017">2017</option>
								  <option value="2016">2016</option>
    </select> </td>
						</tr>
						<tr>
						  <td>5th Subject in 12th<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" name="es" class="form-control"/>
</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			
			<br>
			
			<div id="data">
				<div id="p">
					<p style="margin-left: 1em;"><b> 10th Examination Details</b> </p>
				</div>
				<table class="table">
					<tbody style='text-transform:uppercase' style="font-family: 'Slabo 27px', serif;">
						<tr>
						  <td>Examination</td>
						  <td>10th Year or It's Equivalent</td>
						</tr>
						<tr>
						  <td>Examination board<span class="red-star">★</span></td>
						  <td>

    <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="sb10">
      <option value="Default">--Select Board--</option>
	  <option value="C.B.S.E.">Central Board of Secondary Education (CBSE)</option>
      <option value="I.C.S.E.">The Indian Certificate of Secondary Education (ICSE)</option>
      <option value="State Board">State Board</option>
    </select>
  </td>
						</tr>
						<tr>
						  <td>Year of Passing/Apperaing<span class="red-star">★</span></td>
						  <td> <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="yp10">
								  <option value="Default">--Select Year--</option>
								  <option value="2016">2016</option>
								  <option value="2015">2015</option>
								  <option value="2014">2014</option>
								  <option value="2013">2013</option>
								  <option value="2012">2012</option>
    </select> </td>
						</tr>
						<tr>
						  <td>Overall Percentage in 10th<span class="red-star">★</span></td>
						  <td>Upto 2 Decimal Points <br> <input style='text-transform:uppercase' type="text" name="op" class="form-control"/></td>
						</tr>
						<tr>
						  <td>Marks in Mathematics<span class="red-star">★</span></td>
						  <td>  <input style='text-transform:uppercase' type="text" name="mm" class="form-control"/></td>
						</tr>
						<tr>
						  <td>Marks in Physics<span class="red-star">★</span></td>
						  <td>  <input style='text-transform:uppercase' type="text" name="pm" class="form-control"/></td>
						</tr>
						<tr>
						  <td>Marks in Chemistry<span class="red-star">★</span></td>
						  <td>  <input style='text-transform:uppercase' type="text" name="cm" class="form-control"/></td>
						</tr>
					</tbody>
				</table>
			</div>
			
			
			<br>
			<div id="data">
				<div id="p">
					<p style="margin-left: 1em;"><b> Test Center Preferences</b> </p>
				</div>
				<table class="table">
					<thead style='text-transform:uppercase' style="font-family: 'Slabo 40px', serif;"><tr><td><b>Choose your PUEE - 2018 online test center from the dropdown Menu. You have to specify three preferences for the test centers for Bangalore Campus.</b></td></tr>
					</thead>
					<tbody style='text-transform:uppercase' style="font-family: 'Slabo 27px', serif;">
						<tr>
						  <td>Test Centre Prefrence -1<span class="red-star">★</span></td>
						  <td>    
     <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="tc1">
	  <option value="Default">--TEST CENTRES 1--</option>
      <option value="Agartala">Agartala</option>
	  <option value="Aizawl">Aizawl</option>
	  <option value="Amaravati">Amaravati</option>
	  <option value="Bengaluru">Bengaluru</option>
	  <option value="Bhopal">Bhopal</option>
	  <option value="Bhubaneswar">Bhubaneswar</option>
      <option value="Chandigarh">Chandigarh</option>
	  <option value="Chennai">Chennai</option>
	  <option value="Daman">Daman</option>
	  <option value="Dehradun">Dehradun</option>
	  <option value="Dispur">Dispur</option>
	  <option value="Gandhinagar">Gandhinagar</option>
	  <option value="Gangtok">Gangtok</option>
	  <option value="Hyderabad">Hyderabad</option>
	  <option value="Imphal">Imphal</option>
	  <option value="Itanagar">Itanagar</option>
	  <option value="Jaipur">Jaipur</option>
	  <option value="Kavaratti">Kavaratti</option>
	  <option value="Kohima">Kohima</option>
	  <option value="Kolkata">Kolkata</option>
	  <option value="Lucknow">Lucknow</option>
	  <option value="Mumbai">Mumbai</option>
	  <option value="Naya Raipur">Naya Raipur</option>
	  <option value="New Delhi">New Delhi</option>
	  <option value="Panaji">Panaji</option>
	  <option value="Patna">Patna</option>
	  <option value="Port Blair">Port Blair</option>
	  <option value="Puducherry">Puducherry</option>
	  <option value="Ranchi">Ranchi</option>
	  <option value="Shillong">Shillong</option>
	  <option value="Shimla">Shimla</option>
	  <option value="Silvassa">Silvassa</option>
	  <option value="Srinagar">Srinagar</option>
	  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    </select>
 </td>
						</tr>
						<tr>
						  <td>Test Centre Prefrence -2<span class="red-star">★</span></td>
						  <td><div style='text-transform:uppercase' style="font-family: 'Slabo 40px', serif;">
      
          <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="tc2">
	 <option value="Default">--TEST CENTRES 2--</option>
      <option value="Agartala">Agartala</option>
	  <option value="Aizawl">Aizawl</option>
	  <option value="Amaravati">Amaravati</option>
	  <option value="Bengaluru">Bengaluru</option>
	  <option value="Bhopal">Bhopal</option>
	  <option value="Bhubaneswar">Bhubaneswar</option>
      <option value="Chandigarh">Chandigarh</option>
	  <option value="Chennai">Chennai</option>
	  <option value="Daman">Daman</option>
	  <option value="Dehradun">Dehradun</option>
	  <option value="Dispur">Dispur</option>
	  <option value="Gandhinagar">Gandhinagar</option>
	  <option value="Gangtok">Gangtok</option>
	  <option value="Hyderabad">Hyderabad</option>
	  <option value="Imphal">Imphal</option>
	  <option value="Itanagar">Itanagar</option>
	  <option value="Jaipur">Jaipur</option>
	  <option value="Kavaratti">Kavaratti</option>
	  <option value="Kohima">Kohima</option>
	  <option value="Kolkata">Kolkata</option>
	  <option value="Lucknow">Lucknow</option>
	  <option value="Mumbai">Mumbai</option>
	  <option value="Naya Raipur">Naya Raipur</option>
	  <option value="New Delhi">New Delhi</option>
	  <option value="Panaji">Panaji</option>
	  <option value="Patna">Patna</option>
	  <option value="Port Blair">Port Blair</option>
	  <option value="Puducherry">Puducherry</option>
	  <option value="Ranchi">Ranchi</option>
	  <option value="Shillong">Shillong</option>
	  <option value="Shimla">Shimla</option>
	  <option value="Silvassa">Silvassa</option>
	  <option value="Srinagar">Srinagar</option>
	  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    </select>
  </div></td>
						</tr>
						<tr>
						  <td>Test Centre Prefrence -3<span class="red-star">★</span></td>
						  <td>
      
          <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="tc3">
	 <option value="Default">--TEST CENTRES 3--</option>
      <option value="Agartala">Agartala</option>
	  <option value="Aizawl">Aizawl</option>
	  <option value="Amaravati">Amaravati</option>
	  <option value="Bengaluru">Bengaluru</option>
	  <option value="Bhopal">Bhopal</option>
	  <option value="Bhubaneswar">Bhubaneswar</option>
      <option value="Chandigarh">Chandigarh</option>
	  <option value="Chennai">Chennai</option>
	  <option value="Daman">Daman</option>
	  <option value="Dehradun">Dehradun</option>
	  <option value="Dispur">Dispur</option>
	  <option value="Gandhinagar">Gandhinagar</option>
	  <option value="Gangtok">Gangtok</option>
	  <option value="Hyderabad">Hyderabad</option>
	  <option value="Imphal">Imphal</option>
	  <option value="Itanagar">Itanagar</option>
	  <option value="Jaipur">Jaipur</option>
	  <option value="Kavaratti">Kavaratti</option>
	  <option value="Kohima">Kohima</option>
	  <option value="Kolkata">Kolkata</option>
	  <option value="Lucknow">Lucknow</option>
	  <option value="Mumbai">Mumbai</option>
	  <option value="Naya Raipur">Naya Raipur</option>
	  <option value="New Delhi">New Delhi</option>
	  <option value="Panaji">Panaji</option>
	  <option value="Patna">Patna</option>
	  <option value="Port Blair">Port Blair</option>
	  <option value="Puducherry">Puducherry</option>
	  <option value="Ranchi">Ranchi</option>
	  <option value="Shillong">Shillong</option>
	  <option value="Shimla">Shimla</option>
	  <option value="Silvassa">Silvassa</option>
	  <option value="Srinagar">Srinagar</option>
	  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    </select>
  </td>
						</tr>
						<tr>
						  <td>Test Attempting Time<span class="red-star">★</span></td>
						  <td> <select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="ti">
								  <option value="Default">Select</option>
								  <option value="Day">Day</option>
								  <option value="Night">Night</option>
					</select> </td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<br>
			<div id="data">
			
				<div id="p">
				<p style="margin-left: 1em;"><b> Login Details </b></p>
				</div>
				
				<table class="table">
						<tbody style='text-transform:uppercase' style="font-family: 'Slabo 27px', serif;">
						<tr>
						  <td>Password<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="password" class="form-control" name="pas"/></td>
						</tr>
						<tr>
						  <td>Confirm Password<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="password" class="form-control" name="cpas"/></td>
						</tr>
						</tbody>
					</table>
				
			</div><br><br>
		<!-- <button type="submit" class="btn btn-primary">Submit</button>	 -->
		<input type="submit" value="SUBMIT" class="btn btn-lg btn-success btn-block">
		</form>		</div><br><br><br>
		
		<div class="footer">
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
