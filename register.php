<!DOCTYPE html>
<html lang="en">

<head>

  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    
     .active
     {
      background-color: red;
     }
     body
     {
        background-color: white;/*#D6EBC2;*/
     }    
    
  </style>
<script>
function validate()
{ var x =document.forms["myform"]["username"].value;
if(x=="" || x.length>50) // username should not be empty
{
alert("username must be filled out");
return false;
}

 if (/^\d{10}$/.test(myform.mo.value)) //phone number validation
  {
    
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myform.em.value)) //email validation
  	{
   	 
if (ac == "" || !isNaN(myform.ac.value) || ac.length == 12) //rate validation
  	{
   	 return (true);
 	 }
    	else
	{
	alert("Enter the rate in correct format");
   	 return (false);
	}
    


 	 }
    	else
	{
	alert("You have entered an invalid email address");
   	 return (false);
	}
    

  }
 else
 {
    alert("You have entered an invalid Mobile number!");
    return false;
   }
       
}
</script>
</head>

<body>
<div class="container" style="margin-top:70px">
    <h1 class="well">Registration Form For Freelancers</h1>
  
  <div class="row">
        <form name ="myform" onsubmit="return validate()" action="freelancer2.php" method="post" role="form">
          <div id="data">	
			<div id="p">
				<p style="margin-left: 1em;"><b> Personal Details </b></p>
			</div>
			<div style="margin-left: 1em;" id="data1">
				
					<table class="table">
						<tbody style='text-transform:uppercase' style="font-family: 'Slabo 27px', serif;">
						<tr>
						  <td>Full Name<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase' type="text" class="form-control" name="username"/></td>
						</tr>
						<tr>
						  <td>Gender<span class="red-star">★</span></td>
						  <td><select class="btn btn-primary" style="font-family: 'Slabo 40px', serif;" name="sex">
								  <option value="Select">--Select Gender--</option>
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
						  <td><input style='text-transform:lowercase'type="email" class="form-control" name="em"/></td>
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
						  <td><input style='text-transform:uppercase' type="text" name="na" class="form-control"/></td>
						</tr>
						<tr>
						  <td>Address<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="a1"/><br>
						  <input style='text-transform:uppercase'type="text" class="form-control" name="a2"/>
						  <br><input style='text-transform:uppercase'type="text" class="form-control" name="a3"/>
						  <br><input style='text-transform:uppercase'type="text" class="form-control" name="a4"/></td>
						</tr>
						<tr>
						  <td>City<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="cy"/></td>
						</tr>
						<tr>
						  <td>Pincode<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="pc"/></td>
						</tr>
						<tr>
						  <td>State<span class="red-star">★</span></td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="st"/></td>
						</tr>
						<tr>
						  <td>Land Line Number</td>
						  <td><input style='text-transform:uppercase'type="text" class="form-control" name="lln"/></td>
						</tr>
						<tr>
						  <td>Mobile Number<span class="red-star">★</span></td>
						  <td><input type="text" size="1" value="+91" disabled/><input style='text-transform:uppercase' type="text" name="mo" class="form-control"/></td>
						  </tr>
						</tbody>
					</table>
				</div>
				</div><br><input type="submit" name="submit" value="SUBMIT" class="btn btn-lg btn-success btn-block">
        </form> 
        </div>
  </div>
</div>

</body>
</html>
