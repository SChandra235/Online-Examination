<?php

$stream= $_POST['stream'];
if($stream == 'Engineering') {
	?><script type='text/javascript'>
	var r= confirm('Engineering Choosen');
	if (r == true) {
		window.location.assign("final.html");
	}
	else {
		window.location.assign("SelectStream.html");
	}
	</script>";
	<?php 
	} elseif ($stream == 'LAW') {
   ?><script type='text/javascript'>	var r= confirm('LAW Choosen');
	if (r == true) {
		window.location.assign("NewRegLAW.html");
	}
	else {
		window.location.assign("SelectStream.html");
	}
	</script>";
	<?php 
} else {
    ?><script type='text/javascript'>	var r= confirm('M.B.A. Choosen');
	if (r == true) {
		window.location.assign("NewRegMBA.html");
	}
	else {
		window.location.assign("SelectStream.html");
	}</script>";
	<?php 
}

?>