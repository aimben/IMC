<?php
	$extra_css_class = "";
		if ($pageType == "idx") {$extra_css_class = "idx";}
		elseif ($pageType == "about") {$extra_css_class = "abt";}
		elseif ($pageType == "patemp") {$extra_css_class = "pat";}	
		elseif ($pageType == "servemp") {$extra_css_class = "serv";}
		elseif ($pageType == "location") {$extra_css_class = "loc";}
		elseif ($pageType == "payment") {$extra_css_class = "pay";}
		elseif ($pageType == "contact") {$extra_css_class = "con";}
		elseif ($pageType == "resources") {$extra_css_class = "res";}
		else {$extra_css_class = "other";}				
?>
<!--[if lte IE 8]><html class="no-js lt-ie9 <?php echo $extra_css_class ?>" lang="en" version="HTML+RDFa 1.1"><![endif]-->
<!--[if IE 9]><html class="no-js ie9 <?php echo $extra_css_class ?>" lang="en" version="HTML+RDFa 1.1"><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js <?php echo $extra_css_class ?>" lang="en" version="HTML+RDFa 1.1"><!--<![endif]-->

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	

	<title><?php echo $pageTitle; ?></title>
	<meta name="Keywords" content="Immediate Medical Care, Medical Care Clinic, urgent care services, accept Medicaid, illnesses, health conditions, emergency room, urinary tract infections, ear and eye infections." />
	<meta name="Description" content="Immediate Medical Care provides urgent care services to Wichita area patients who have minor injuries, cuts and lacerations that may require stitches." />
	

	<link rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/css/foundation.css" />
	<link rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/css/app.css" />
	<script src="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/js/vendor/modernizr.js"></script>

	<link rel="shortcut icon" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/favicon.ico">

<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
  <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
  <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->

	<?php include ("helper/gFonts.php"); ?>

