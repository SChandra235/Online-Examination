<?php 
include 'config.php';
?>
<?php
$uid=$_POST['userid'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$email=$_POST['Email'];
$ac=$_POST['ac'];
$fn=$_POST['fn'];
$mn=$_POST['mn'];
$country=$_POST['country'];
$address=$_POST['address'];
$cy=$_POST['cy'];
$zip=$_POST['zip'];
$st=$_POST['st'];
$mob=$_POST['mob'];
$il=$_POST['il'];
$sb=$_POST['sb'];
$yp=$_POST['yp'];
$es=$_POST['es'];
$sb10=$_POST['sb10'];
$yp10=$_POST['yp10'];
$op=$_POST['op'];
$tc1=$_POST['tc1'];
$tc2=$_POST['tc2'];
$tc3=$_POST['tc3'];
$pas=$_POST['pas'];
$cpas=$_POST['cpas'];
$pas=md5($pas);


$query = "select * from center where name='$tc1'";
$result = mysqli_query($con, $query);
$row1 = mysqli_fetch_array($result);

$query1 = "select * from center where name='$tc2'";
$result1 = mysqli_query($con, $query1);
$row2 = mysqli_fetch_array($result1);

$query2 = "select * from center where name='$tc3'";
$result2 = mysqli_query($con, $query2);
$row3 = mysqli_fetch_array($result2);


if($row1[1] <500)
{
	$r=$row1[1]+1;
	$q = "UPDATE center SET t1='$r' WHERE name='$tc1'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc1','9:00 A.M. - 12:00 A.M.')";
	mysqli_query($con, $query5);
}
elseif($row1[2]<500)
{
	$r=$row1[2]+1;
	$q = "UPDATE center SET t2='$r' WHERE name='$tc1'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc1','1:00 P.M. - 4:00 P.M.')";
	mysqli_query($con, $query5);
}
elseif($row1[3]<500)
{
	$r=$row1[3]+1;
	$q = "UPDATE center SET t3='$r' WHERE name='$tc1'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc1','5:00 P.M. - 8:00 P.M.')";
	mysqli_query($con, $query5);
}
elseif($row2[1] <500)
{
	$r=$row2[1]+1;
	$q = "UPDATE center SET t1='$r' WHERE name='$tc2'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc2','9:00 A.M. - 12:00 A.M.')";
	mysqli_query($con, $query5);
}
elseif($row2[2]<500)
{
	$r=$row2[2]+1;
	$q = "UPDATE center SET t2='$r' WHERE name='$tc2'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc2','1:00 P.M. - 4:00 P.M.')";
	mysqli_query($con, $query5);
}
elseif($row2[3]<500)
{
	$r=$row2[3]+1;
	$q = "UPDATE center SET t3='$r' WHERE name='$tc2'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc2','5:00 P.M. - 8:00 P.M.')";
	mysqli_query($con, $query5);
}
elseif($row3[1] <500)
{
	$r=$row3[1]+1;
	$q = "UPDATE center SET t1='$r' WHERE name='$tc3'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc3','9:00 A.M. - 12:00 A.M.')";
	mysqli_query($con, $query5);
}
elseif($row3[2]<500)
{
	$r=$row3[2]+1;
	$q = "UPDATE center SET t2='$r' WHERE name='$tc3'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc3','1:00 P.M. - 4:00 P.M.')";
	mysqli_query($con, $query5);
}
else
{
	$r=$row3[3]+1;
	$q = "UPDATE center SET t3='$r' WHERE name='$tc3'";
	mysqli_query($con, $q);
	$query5 = "insert into allocate values('$ac', '$tc3','5:00 P.M. - 8:00 P.M.')";
	mysqli_query($con, $query5);
}


$query = "insert into pd values('$uid', '$sex','$dob','$email', '$ac', '$fn', '$mn', '$country', '$address', '$cy', '$zip', '$st','$mob')";
mysqli_query($con, $query);
$query1 = "insert into twelve values('$ac','$il','$sb','$yp','$es')";
mysqli_query($con, $query1);
$query2 = "insert into ten values('$ac','$sb10','$yp10','$op')";
mysqli_query($con, $query2);
$query3 = "insert into fee values('$ac',0,0)";
mysqli_query($con, $query3);
$query4 = "insert into login values('$ac','$pas')";
mysqli_query($con, $query4);
mysqli_close($con);
?>
<script type='text/javascript'>alert('Signup Successfull');
		function newDoc() {
    window.location.assign("log.html")
}newDoc();</script>