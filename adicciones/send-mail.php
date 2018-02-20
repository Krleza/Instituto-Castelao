

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="description" content="Centros de adicciones.">
<meta name="keywords" content="Centros de adicciones, centros de deseintoxicación, clínica de desintoxicación, tratamiento de adicciones, tratamiento de alcoholismo, alcoholismo, adicciones">
<meta name="author" content="instituto castelao">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- SITE TITLE -->
<title>Centros de adicciones</title>

<!-- =========================
      FAV AND TOUCH ICONS  
========================= -->	
<link rel="icon" href="images/Instituto%20Castelao.png">
<link rel="apple-touch-icon" href="images/Instituto%20Castelao.png">

<!-- =========================
     STYLESHEET
========================= -->	
<!-- FONT AWESOME -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- FORMSTONE NAVIGATION -->
<link rel="stylesheet" href="css/navigation.css">

<!-- COLORS -->
<link rel="stylesheet" href="css/colors/blue.css"> <!-- DEFAULT COLOR/ CURRENTLY USING -->
<!-- <link rel="stylesheet" href="css/colors/red.css"> -->
<!-- <link rel="stylesheet" href="css/colors/green.css"> -->
<!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->
<!-- <link rel="stylesheet" href="css/colors/turquoise.css"> -->
<!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
<!-- <link rel="stylesheet" href="css/colors/orange.css"> -->

<!-- CUSTOM STYLESHEET -->
<link rel="stylesheet" href="css/styles.css">

<!-- RESPONSIVE FIXES -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Jquery -->
<script src="js/jquery-2.0.3.min.js"></script>

<script>
//make sure that js is enabled
$('html').addClass('js');
</script>

<!--[if IE]>
<style>label {display: block;}</style>
<![endif]-->

</head>

<body>
<!-- =========================
     PRELOADER
========================== -->
<div class="preloader"></div>

<!-- =========================
     NAVIGATION 
========================== -->
<nav class="navigation dark-bg">
	<div class="wrapper">
		
		<!-- NAVIGATION HEADER -->
		<div class="navbar-header">
			<!-- LOGO -->
			<a class="navigation-logo" href="www.institutocastelao.com">

				INSTITUTO CASTELAO
			</a>	
		</div>
		
		<!-- NAVIGATION LINKS -->

				<!-- BUTTON -->
				<div class="btn-container">
					<a class="btn standard-btn" onclick="goog_report_conversion('tel:900-505-100')" href="tel:900505100" >900 505 100</a>
				</div>		

		
	</div> <!-- /END WRAPPER -->
</nav>

<!-- =========================
     HOME
========================= -->	
<header class="send-mail-header dark-bg" id="home">
<div class="color-overlay">
	<div class="wrapper">
	
		<div class="send-mail">
			<!-- SEND MAIL SCRIPT -->
			<?php

			// Set the email subject
			$subject = "instituto castelao";

			// FIXME: Update this to your desired email address
			$to = "cnovas@institutocastelao.com";

			// Build the email data
			$msg = "NOMBRE: "  .$_POST['name']    ."<br>\n";
			$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
			$msg .= "TELÉFONO: "  .$_POST['phone']    ."<br>\n";
			$msg .= "MENSAJE: "  .$_POST['message']    ."<br>\n";

			// Build the email headers
			$from = $_POST['email'];
			$headers = "From: $name <".$from. ">";

			// Send the email
			if (mail($to, $subject, $msg, $headers)) {
				// Set a 200 (okay) response code
				http_response_code(200);
				echo "<h2>gracias por enviarnos tu mensaje</h2><h3>Intentaremos contestaste lo antes posible.</h3> <h3>Un abrazo</h3><a class="icon" href="www.institutocastelao.com"><i class="fa fa-home"></i>
			</a>";
			} else {
				// Set a 500 (internal server error) response code
				http_response_code(500);
				echo "<h2><span class='colored-text'>¡Oh!</span> Lo siento, el mensaje no se ha podido enviar. Puedes volver a intentarlo</h2> <a class="icon" href="www.institutocastelao.com"><i class="fa fa-home"></i>
			</a> ";
			}

			?>
		</div>
		
	</div> <!-- /END WRAPPER -->
</div> 
</header>

<!-- =========================
     FOOTER   
========================= -->	
<footer class="dark-bg">
	<!-- BACK TO TOP -->
	<a class="icon back-to-top" onclick="goog_report_conversion('tel:900-505-100')" href="tel:900505100"><i class="fa fa-phone"></i></a>

	<!-- SOCIAL NAVIGATION -->
	<ul class="social-navigation">
		<li><a href="https://www.facebook.com/InstitutoCastelao/" class="icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
		<li><a href="https://twitter.com/Inst_Castelao" class="icon" target="_blank"><i class="fa fa-twitter"></i></a></li>

	</ul>
	
	<!-- COPYRIGHT 
	<p>
		&copy; instituto castelao <i class="fa fa-heart heart"></i> by <a href="http://www.institutocastelao.com">castelao</a>
	</p>
-->
</footer>

<!-- =========================
     SCRIPTS   
========================= -->	
<!-- Formstone Navigation -->
<script src="js/core.js"></script>
<script src="js/mediaquery.js"></script>
<script src="js/swap.js"></script>
<script src="js/touch.js"></script>
<script src="js/navigation.js"></script>

<!-- Smoothscroll -->
<script src="js/smoothscroll.js"></script>

<!-- Jquery Nav -->
<script src="js/jquery.nav.js"></script>

<!-- ImagesLoaded -->
<script src="js/jquery.imagesloaded.js"></script>

<!-- Wookmark -->
<script src="js/jquery.wookmark.min.js"></script>

<!-- Retina -->
<script src="js/retina.min.js"></script>

<!-- Custom Script -->
<script src="js/custom.js"></script>

</body>
</html>