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


	<?php 

echo $this->Html->script('/admin_theme/oldjs/plugin/pace/pace.min.js'); 

echo $this->Html->script('/admin_theme/oldjs/libs/jquery-2.0.2.min.js'); 

echo $this->Html->script('/admin_theme/oldjs/libs/jquery-ui-1.10.3.min.js');

echo $this->Html->script('/admin_theme/oldjs/bootstrap/bootstrap.min.js'); 

echo $this->Html->script('/admin_theme/oldjs/plugin/jquery-validate/jquery.validate.min.js'); 

echo $this->Html->script('/admin_theme/oldjs/plugin/masked-input/jquery.maskedinput.min.js'); 

echo $this->Html->script('/admin_theme/oldjs/app.min.js'); 



	?>

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


	</body>
</html>