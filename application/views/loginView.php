<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>La Villita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
</head>
<body>
	<div class="container-fluid jumbotron">
		<h1 align="center" class="label-info">La Villita</h1>
	</div>
	<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
		<div class="container">
			<form method="POST" action="" class="form-horizontal">
				<div class="form-group">
					<label for="" class="col-md-1 col-sm-1 control-label">Usuario: </label>
					<div class="col-md-3 col-sm-3">
						<input type="text" name="nombreUsuario" id="usuario" placeholder="Nombre de Usuario" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-1 col-sm-1 control-label">Contraseña: </label>
					<div class="col-md-3 col-sm-3">
						<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control">
					</div>
				</div>
				<div class="form-group">
	    			<div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
	      				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>
	    			</div>
	  			</div>
			</form>
		</div>
	</div>
</body>
</html>