<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
	<title>ZZZ</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">


	<!--script src="javascripts/alerts.js"></script-->


</head>
<body>

	<!-- header -->
	<div class="header">
		<div class="container">
			header
		</div><!-- #container -->
	</div><!-- #header -->


	<!-- content -->
	<div class="content">
		<div class="container">
			<?php
			if(!$_REQUEST['page']) {
				$page = 'homepage';
			} else {
				$page = $_REQUEST['page'];
			}

			if (file_exists($page.'.php')) {
				require_once $page.'.php';
			}
			?>

		</div><!-- #container -->
	</div><!-- #content -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			footer
		</div><!-- #container -->
	</div><!-- #footer -->



	<!-- Included JS Files -->
	<!--script type="text/javascript" src="/javascripts/jquery.syncheight.js"></script-->



</body>
</html>
