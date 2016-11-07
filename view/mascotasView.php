<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Mis mascotas</title>
<?= inc('commonCss');?>
</head>
<header>
    <?= inc('header');?>
 </header>

<body>

	<div class="container">

		<div class="page-header">
	    	<h1 class="h2">Mis mascotas 
	    		<a class="pull-right btn btn-success" href="<?php echo $helper->url("mascotas","addView"); ?>"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Agregar nueva mascota </a>
	    	</h1> 
	    </div>
	    
	<br />

	<div class="row">
	<?php

		if($mascotas){

			foreach ($mascotas as $mascota) {
				
	 			?>
	  			<div class="col-xs-3">
					<p class="page-header"><?php echo $mascota->name."&nbsp;/&nbsp;".$mascota->raza; ?></p>
					<img src="./files/<?php echo $mascota->imagen; ?>" class="img-rounded" width="250px" height="250px" />
					<p class="page-header">
					<span>
					<a class="btn btn-info btn-xs" href="editform.php?edit_id=<?php echo $mascota->imagen; ?>" title="click for edit" onclick="return confirm('Seguro que desea editar la mascota seleccionada?')"><span class="glyphicon glyphicon-edit"></span> Editar</a> 
					<a class="pull-right btn btn-xs btn-danger" href="<?php echo $helper->url("mascotas","eliminar"); ?>?delete_id=<?php echo $mascota->id; ?>" title="click for delete" onclick="return confirm('Seguro que desea eliminar esta Mascota?')"><span class="glyphicon glyphicon-remove-circle"></span> Eliminar</a>
					</span>
					</p>
				</div>       
				<?php
			}
		}
		else
		{
			?>
	        <div class="col-xs-12">
	        	<div class="alert alert-warning">
	            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No se han encontrado mascotas ...
	            </div>
	        </div>
	        <?php
		}
		
	?>
	</div>	
</div>
	
	<?php inc('commonJs'); ?>

</body>
</html>