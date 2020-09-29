<!DOCTYPE html>
<html lang="en-us" id="lock-page">
	<head>
		<meta charset="utf-8">
		<title>  Administrator</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		 <?php echo  $this->Html->css(['/admin_theme/oldcss/bootstrap.min.css', '/admin_theme/oldcss/font-awesome.min.css', '/admin_theme/oldcss/smartadmin-production.min.css','admin_theme/oldcss/smartadmin-skins.min.css','/admin_theme/oldcss/demo.min.css','/admin_theme/oldcss/lockscreen.min.css']); ?>

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	</head>
	<body>

		<div id="main" role="main">


    <?= $this->Flash->render() ?>
   <?= $this->fetch('content') ?>


	

		<!--================================================== -->	

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script src="<?php echo base_url(); ?>/admin_theme/oldjs/plugin/pace/pace.min.js"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="<?php echo base_url(); ?>/admin_theme/oldjs/libs/jquery-2.0.2.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="<?php echo base_url(); ?>/admin_theme/oldjs/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="<?php echo base_url(); ?>/admin_theme/oldjs/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="<?php echo base_url(); ?>/admin_theme/oldjs/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="<?php echo base_url(); ?>/admin_theme/oldjs/plugin/jquery-validate/jquery.validate.min.js"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src="<?php echo base_url(); ?>/admin_theme/oldjs/plugin/masked-input/jquery.maskedinput.min.js"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="<?php echo base_url(); ?>/admin_theme/oldjs/app.min.js"></script>

	</body>
</html>