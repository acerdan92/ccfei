<h1><center>Registrar uso de salón</center></h1>
<div class="container">
	<?php echo form_open(base_url().'Registros/agregarRegistro'); ?>
	<div class="row">

		<div class="col-md-6">		
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Fecha:</span>
				<div class="bfh-datepicker" data-name="nFecha" data-format="y-m-d" data-date="today" data-min="today">  
				</div>		
			</div>				
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">
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

		<div class="col-md-6">						
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Tipo de uso:</span>
				<select class="form-control" name="nTipoUso">
		          	<?php foreach($tipoUsos as $key => $value){echo "<option value=".$value->id.">".$value->Uso."</option>";}?>
        		</select>
        	</div>		
		</div>		
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">				
				<span class="input-group-addon" id="basic-addon1">Salón:</span>
				<select class="form-control" name="nSalon">
		          <?php foreach($salones as $key => $value){echo '<option value="'.$value->id.'">'.$value->salon.'</option>';} ?>
        		</select>
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Cantidad de horas:</span>				
				<input type="text" class="form-control bfh-number" name="nCantidadHoras" data-min="1" data-max="24" >
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Cantidad de usuarios:</span>				
				<input name="nCantidadUsuarios" type="text" class="form-control bfh-number" data-min="1" data-max="40">
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Matrícula:</span>
				<input type="text" class="form-control" placeholder="Sólo si es uso personal" name="nMatricula" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>	
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Hora de entrada:</span>				
				<div class="bfh-timepicker" data-time="now" data-name="nHoraEntrada">
				</div>				
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Hora de salida:</span>				
				<div class="bfh-timepicker" data-time="now" data-name="nHoraEntrada">
				</div>				
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Docente:</span>
				<select class="form-control" name="nDocente">
					<option value="NULL">
						Ninguno
					</option>
		          <?php foreach($docentes as $key => $value){ echo '<option value="'.$value->id.'">'.$value->nombre.' '.$value->ap_paterno.' '.$value->ap_materno.'</option>';}?>
        		</select>
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Experiencia educativa:</span>
				<select class="form-control" name="nExperienciaEducativa">
					<option value="NULL">
						Ninguna
					</option>
		          <?php foreach($experiencias_educativas as $key => $value){ echo '<option value="'.$value->id.'">'.$value->experiencia_educativa.'</option>';}?>
        		</select>
			</div>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6">			
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Observaciones:</span>
				<input type="text" class="form-control" placeholder="Opcional" name="nObservaciones" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>
	<br>
	<div class="row">		 
		<div class="col-lg-6">			
			<button type="submit" class="btn btn-success pull-right">Guardar</button>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>

