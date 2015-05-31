<h1 align="center">Reporte de resultados</h1>
<hr>
<div class="container">
	<div class="row">
		<div class="input-group">
		  <span class="input-group-addon">Reporte: </span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="<?php if($tipo_reporte == '1'){echo "Cantidad de usuarios";}else{echo "Cantidad de horas";}?>">		  	  
		</div>
	</div>
	<div class="row">
		<div class="input-group">
		  <span class="input-group-addon">Programa educativo: </span>
		  
		  <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="<?php echo $programas_educativos_id ?>">
		</div>
	</div>
	<div class="row">
		<div class="input-group">
		  <span class="input-group-addon">Tipo de uso: </span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="<?php echo $tipo_usos_id ?>">
		</div>
	</div>
	<div class="row">
		<div class="input-group">
		  <span class="input-group-addon">Fecha inicial: </span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="<?php echo $fechaInicio ?>">
		  <span class="input-group-addon">Fecha final: </span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="<?php echo $fechaFin ?>">
		</div>
	</div>

	<?php	
	    echo $this->gcharts->ColumnChart('Reporte')->outputInto('inventory_div');
	    echo $this->gcharts->div(600, 500);

	    if($this->gcharts->hasErrors())
	    {
	        echo $this->gcharts->getErrors();
	    }
	?>
</div>