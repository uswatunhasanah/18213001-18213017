<?php
	$textnya = 'ERROR';
	if (isset ($_GET["action"])) {
		switch ($_GET["action"]){
				case "get_pdf";
					if (isset ($_GET["text_pdfnya"])) 
						$textnya = $_GET["text_pdfnya"];
				break;
			}
		}
?>
<script src="jsPDF/jspdf.js"></script>
<script src="jsPDF/jspdf.debug.js"></script>
<script src="jsPDF/jspdf.PLUGINTEMPLATE.js"></script>
<script src="jsPDF/jspdf.plugin.addimage.js"></script>
<script src="jsPDF/jspdf.plugin.cell.js"></script>
<script src="jsPDF/jspdf.plugin.ie_below_9_shim.js"></script>
<script src="jsPDF/jspdf.plugin.sillysvgrenderer.js"></script>
<script src="jsPDF/jspdf.plugin.split_text_to_size.js"></script>
<script src="jsPDF/jspdf.plugin.from_html.js"></script>
<script src="jsPDF/jspdf.plugin.javascript.js"></script>
<script src="jsPDF/jspdf.plugin.standard_fonts_metrics.js"></script>
<script>
	var doc = new jsPDF('p','in','letter')
	, size = 12
	, font = ['Times','Roman']
	, textnya = '<?php echo $textnya; ?>'
	
	, lines = doc.setFont(font[0], font[1])
			.setFontSize(size)
			.splitTextToSize(textnya, 7.5);
	
	doc.text(0.5, 0.5 , lines);
	
	var out = doc.output("datauristring");
</script>

<?php
	$content = '<script> document.write(out) </script>';
	exit($content);
?>
