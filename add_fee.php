<?php
include 'config.php';
session_start();

$ac=$_SESSION["ac"];
$prn=$_POST['prn'];

$query = "update fee set prn='$prn' where ac='$ac'";
mysqli_query($con, $query);

?>
	<script type='text/javascript'>alert('Payment Reference Number (PRN) added');
	window.location.assign("index.html")
		</script>