<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>La Villita</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target="#menu" class="navbar-toggle collapsed" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo base_url();?>" class="navbar-brand">La Villita</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="<?php base_url() ?>index.php/Ventas"><span class="glyphicon glyphicon-shopping-cart"></span> Ventas</a></li>
        			<li class="active"><a href="#"><span class="glyphicon glyphicon-calendar"></span> Rentas</a></li>
        			<?php if() ?>
        			<li class="active"><a href="<?php base_url() ?>index.php/Productos"><span class="glyphicon glyphicon-gift"></span> Productos</a></li>
        			<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Proveedores</a></li>
      			</ul>
      			<ul class="nav navbar-nav navbar-right">
      				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
      			</ul>
      		</div>
      	</div>
	</nav>
	<div class="container">
		<center>
			<h1 class="label-info">La Villita</h1>
		</center>
	</div>
