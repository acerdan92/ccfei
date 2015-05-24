<h2><center>Generación de reportes</center></h2>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="input-group">				
				<span class="input-group-addon" id="basic-addon1">Tipo de gráfico:</span>
				<select name="nTipoGrafico" class="form-control">
					<option value="1">Pastel</option>
				</select>				
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="input-group">				
				<span class="input-group-addon" id="basic-addon1">Programa educativo:</span>
				<select name="nProgramaEducativo" class="form-control">
					<?php foreach ($programasEducativos as $key => $value) {echo "<option value=".$value->id.">".$value->programa_educativo."</option>";} ?>
				</select>				
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="input-group">				
				<span class="input-group-addon" id="basic-addon1">Tipo de uso:</span>
				<select name="nProgramaEducativo" class="form-control">
					<?php foreach($tipoUsos as $key => $value){echo "<option value=".$value->id.">".$value->Uso."</option>";}?>
				</select>				
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">		
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Fecha inicial:</span>
				<div class="bfh-datepicker" data-name="nFechaInicio" data-format="y-m-d">  
				</div>		
			</div>				
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">		
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Fecha final:</span>
				<div class="bfh-datepicker" data-name="nFechaFin" data-format="y-m-d">  
				</div>		
			</div>				
		</div>
	</div>
	<br>
	<div class="row">		 
		<div class="col-lg-6">			
			<button type="submit" class="btn btn-success pull-right">Generar reporte</button>
		</div>
	</div>
</div>
