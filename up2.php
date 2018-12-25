<?php
session_start();
if(isset($_POST['submit'])){
    if(count($_FILES['upload']['name']) == 2){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
			
			
			$imageType=$_FILES['upload']['type'][$i];
			if (substr($imageType,0,5) =="image")
			{
			
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "uploaded/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
					?><script type='text/javascript'>alert('Images Uploaded');
		function newDoc() {
    window.location.assign("fee.php")
}newDoc();</script>"
<?php
                }
              }
		} 
else 
{
	?><script type='text/javascript'>alert('Check the Files Type to be Uploaded. It should be a Image Only');
		function newDoc() {
    window.location.assign("up2.php")
}newDoc();</script>"
	<?php
}	}
    }
	else {
		?><script type='text/javascript'>alert('Check the Number of Images to be Uploaded. It should be equal to 2');
		function newDoc() {
    window.location.assign("up2.php")
}newDoc();</script>"
	<?php }
	

    //show success message
    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Image Upload</title>
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
				<p style="margin-left: 1em;"><b>Select Your Images: </b></p></div>
				
				
				<form action="" enctype="multipart/form-data" method="post">

					<center><div>
						<label for='upload'>Add Attachments:
						One File for Each: Aadhar Card: Front and Back, Your Signature and Your Passport Size Photograph</label>
						<br><br><input id='upload' name="upload[]" type="file" multiple="multiple" />
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
	
	
	
	
		
	</div>
	</body>
</html>