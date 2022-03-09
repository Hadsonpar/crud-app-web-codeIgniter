<div class="container">
	<div class="row">	

		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Leer Empleados</h1> </br>          	
		  </div>
		</div>

		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Nombres y Apellidos</th> 
				<th>Email</th> 
				<th>Sexo</th> 
				<th>Edad</th> 
				<th>Accion</th>
			</tr> 
		</thead> 
        <tbody> 
	        <?php 
            foreach($res_id->result() as $row){
            ?>
            	<tr> 
            		<th scope="row"><?php echo $row->id; ?></th> 
            		<td><?php echo $row->first_name . " " . $row->last_name; ?></td> 
            		<td><?php echo $row->email_id; ?></td> 
            		<td><?php echo $row->gend ?></td> 
            		<td><?php echo $row->age ?></td> 
            		<td>
            			<a href="update/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            			<a href="delete/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            		</td>
            	</tr> 
            <?php } ?>
        </tbody>
		</table>
	</div>

	<!--<a class="btn btn-success" href="<?= base_url('crud/create'); ?>" role="button">Regresar</a>-->
	<a class="btn btn-success col-md-2 col-md-offset-10" href="<?= base_url('crud/create'); ?>" role="button">Regresar</a>
	
</div>