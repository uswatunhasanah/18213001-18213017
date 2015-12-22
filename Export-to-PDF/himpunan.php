<?php
	if (isset($_GET["himp"])){
		$file = "crawl/" . $_GET["himp"] . ".html";
	}
	
?>
<!DOCTYPE html>
<html>
<head>

		<title>Data Kader Himpunan | KM-ITB </title>
		<link href="css/association.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/half-slider.css" rel="stylesheet">	
		<link href="css/bootstrap.min.css" rel="stylesheet">		

</head>
<body>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="title">				
					<a class="navbar-brand" href="#">Welcome to Data Kader Himpunan page!</a>
				</div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              </div>
            <!-- /.navbar-collapse -->
        </div>
       
	<!-- /.container -->
    </nav>
	 <div class="container">
        <div class="row">
            <div class="col-lg-12">
				<div class="menu-bar">
					<div class= "logo">
						<img id="logo-img" src="assets/logo.gif"></img>
					</div>
					<div class= "menu">
							<ul class="nav nav-pills">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Event</a></li>
								<li><a href="#">Open Data</a></li>
								<li><a href="datakader.html">Kader</a></li>
							</ul>
					</div>
				</div>
            </div>
        </div>
	</div>
	
	<div class="container">
	<div class="satu">
		<div class="satu-txt">
			<legend><p><b>Data Kader</b></p></legend>
			<fieldset>
			<?php include $file;?>	
			<?php
			require 'SimpleHTMLDom/simple_html_dom.php';
			$output = '';
			$html = file_get_html($file);
			$element = $html->find("li,p");

			foreach($element as $e) {
				$es =$e->find('text');
				$ed ='';
				foreach($es as $ee)
					$ed = $ed . $ee;
				$output = $output . $ed . '\n\n';
			}

			?>
			 
			<form action="pdf_client.php" method="get" name="form_pdf">
						<input type="hidden" name="pdfInput" value="<?php echo $output; ?>" >
						<input type="submit" value="Export to PDF now!"> 
			</form>			
			</fieldset>
			<a href = "http://localhost/UI/1-columnKad.php"><button>Lihat Kader Himpunan</button></a>
		</div>
		
		
	</div>
	</div>
	
	<!-- Page Content -->
    <div class="container">
	<div class="center">
		<div class="social-media">
			<a href='https://www.facebook.com/ITB.KM'><img id="icon-fb" src="assets/home/icon-fb.png"></img></a>
			<a href='http://mail.google.com'><img id="icon-mail" src="assets/home/icon-mail.png"></img></a>
			<a href='https://www.instagram.com/km_itb/'><img id="icon-ig" src="assets/home/icon-ig.png"></img></a>	
		</div>
	</div>
	</div>
	
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="copyright">
						<p>Sistem dan Teknologi Informasi 2013</p>
					</div>
            </div>
            <!-- /.row -->
        </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</center>
</body>
</html>

