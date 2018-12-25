<?php

include 'config.php';
//Session Start
session_start();

?>

<?php

//Data Entry in Session
$_SESSION["ac"]=mysqli_real_escape_string($con,$_POST['ac']);
$_SESSION["pas"]=mysqli_real_escape_string($con,$_POST['pas']);

$pas=$_SESSION["pas"];
$pas=md5($pas);
$username = $_SESSION["ac"];
//Checking the values are existing in the database or not
$query = "select * from login where ac = '$username'";

$result = mysqli_query($con, $query) or die("INVALID USERNAME OR PASSWORD");
$row = mysqli_fetch_array($result);

$query1 = "select * from fee where ac = '$username'";

$result1 = mysqli_query($con, $query1) or die("INVALID USERNAME OR PASSWORD");
$row1 = mysqli_fetch_array($result1);

//Checking for Access
if($row[1] == $pas && $row1[1]!=0)
{
	?><script type='text/javascript'>alert('Login Successfull');
		function newDoc() {
    window.location.assign("admit.php")
}newDoc();</script>";  
		<?php //header("location: firstpage.html");
}
elseif($row[1] == $pas && $row1[1]==0)
{
	?><script type='text/javascript'>alert('Login Successfull');
		function newDoc() {
    window.location.assign("fee.php")
}newDoc();</script>";  
		<?php //header("location: firstpage.html");
}
else
{
	die("Invalid User");sleep(3);?><script type='text/javascript'>alert('Login Not Successfull');
		function newDoc() {
    window.location.assign("index.html")
}newDoc();</script>";  
		<?php //
	//echo "<script type='text/javascript'>alert('Data Entry Successfull ');</script>";  
    //header("location: index.html");
}
?>