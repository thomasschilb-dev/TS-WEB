<?php
# get variable
$light = $_GET['light'];
# load lighton.css
if ($light == "on")			{ include('lighton.php'); }
# load lightoff.css
elseif ($light == "off")  	{ include('lightoff.php'); }
#secure
elseif ($light == "")		{ include('lighton.php'); }
else 						{ include('lighton.php'); }
?>
