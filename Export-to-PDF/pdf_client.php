<?php
	$pdfInput = urlencode($_GET["pdfInput"]);
	$info = file_get_contents('http://localhost/UI/pdf_API.php?action=get_pdf&text_pdfnya=' . $pdfInput); 
	echo $info;
?>
