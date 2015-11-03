<?php
	$opt = array('location' => 'http://localhost/SOAP-server.php', 'uri' => 'http://localhost/');
	$api = new SoapClient(NULL,$opt);
	$a=9;
	$b=7;
	echo $api -> helloworld();
	echo "<br>"; 
	echo $api -> addition($a,$b);
	echo "<br>";
	echo $api -> getData();
?>
	
