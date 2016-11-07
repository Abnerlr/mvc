<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mi mascota</title>
	<?php inc('commonCss'); ?>
</head>
<header>
	<?php inc('header'); ?>
</header>
	<body>

	

	<div class="container">


		<div class="page-header">
	    	<h1 class="h2">Agregar nueva mascota. 
	    		<a class="pull-right btn btn-default" href="<?php echo $helper->url('mascotas','index'); ?>"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Mis mascotas </a>
	    	</h1>
	    </div>
	    
	<form method="post" enctype="multipart/form-data" class="form-horizontal" action=" <?php echo $helper->url('mascotas','nueva'); ?> ">
		    
		<table class="table table-bordered table-responsive">
		
	    <tr>
	    	<td><label class=" control-label">Nombre.</label></td>
	        <td><input class="form-control" type="text" name="user_name" placeholder="Nombre de tu mascota" /></td>
	    </tr>
	    
	    <tr>
	    	<td><label class=" control-label">Raza.</label></td>
	        <td><input class="form-control" type="text" name="user_job" placeholder="Raza de tu mascota" /></td>
	    </tr>
	    
	    <tr>
	    	<td><label class=" control-label">Foto perfil.</label></td>
	        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
	    </tr>
	    
	    <tr>
	        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
	        <span class="glyphicon glyphicon-save"></span> &nbsp; Guardar
	        </button>
	        </td>
	    </tr>
	    
	    </table>
	    
	</form>
	
	</div>

	<!-- Manejo de Errores -->
	<div class="">
		<?php
		if(isset($errMSG)){
				?>
	            <div class="alert alert-danger">
	            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
	            </div>
	            <?php
		}
		else if(isset($successMSG)){
			?>
	        <div class="alert alert-success">
	              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
	        </div>
	        <?php
		}
		?>
	</div>

	<!-- Scripts -->
	<?php inc('commonJs'); ?>

	</body>
</html>