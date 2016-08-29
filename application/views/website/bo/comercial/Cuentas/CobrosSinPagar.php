<table  id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr>
			<th data-hide="phone">ID</th>
			<th data-hide="phone">Usuario</th>
			<th data-hide="phone">Nombre y Apellido</th>
			<th data-hide="phone">Telefono</th>
			<th data-hide="phone">E-mail</th>
			<th data-class="expand">Fecha Solicitud</th>	
			<th data-hide="phone,tablet">Valor</th>
			<th data-hide="phone,tablet">Estado</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($cobros as $cobro) {  ?>
			<tr>
				<td><?php echo $cobro["id"]; ?></td>
				<td><?php echo $cobro["username"]; ?></td>
				<td><?php echo $cobro["nombres"]; ?></td>
				<td><?php echo $cobro["telefono"]; ?></td>
				<td><?php echo $cobro["email"]; ?></td>
				<td><?php echo $cobro["fecha"]; ?></td>
				<td>$ <?php echo number_format($cobro["monto"],2); ?></td>
				<td><?php echo $cobro["estado"]; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
