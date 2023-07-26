<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script>
	$(document).ready(function() {
		//Menu Lateral
		$(".xp-menubar").on('click', function() {
			$("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		});

		$('.xp-menubar,.body-overlay').on('click', function() {
			$("#sidebar,.body-overlay").toggleClass('show-nav');
		});
		//Datatable
		$('.datatable-export').DataTable({
			"language": {
				"processing": "Procesando...",
				"lengthMenu": "Mostrar _MENU_ registros",
				"zeroRecords": "No se encontraron resultados",
				"emptyTable": "Ningún dato disponible en esta tabla",
				"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
				"search": "Buscar:",
				"infoThousands": ",",
				"loadingRecords": "Cargando...",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "Siguiente",
					"previous": "Anterior"
				},
			},
			"dom": 'Bfrtip<"col-md-6 inline"> <"col-md-6 inline">',
			"buttons": [{
					extend: 'pdf',
					className: 'btn btn-danger',
					text: '<i class="bi bi-file-earmark-pdf"></i> PDF'
				},
				/* {
					extend: 'copyHtml5',
					id: 'cd',
					className: 'btn btn-primary',
					text: '<i class="bi bi-clipboard"></i> Copy'
				},
				//'spacer',
				{
					extend: 'csv',
					className: 'btn btn-csv',
					text: '<i class="bi bi-file-earmark-spreadsheet"></i> CSV'
				},
				//'spacer',
				{
					extend: 'excel',
					className: 'btn btn-excel',
					text: '<i class="bi bi-file-earmark-excel"></i> Excel'
				},
				//'spacer',
				
				//'spacer',
				{
					extend: 'print',
					className: 'btn btn-print',
					text: '<i class="bi bi-printer"></i> Imprimir'
				}, */

			]

		});
	});
</script>
<?php
if (isset($_SESSION['MensajeError']) && $_SESSION['MensajeError'] != "") { ?>
	<script>
		Swal.fire({
			title: "Ha ocurrido un error!",
			icon: 'error',
			text: '<?php echo $_SESSION['MensajeError'] ?>'

		})
	</script>

<?php
	$_SESSION['MensajeError'] = "";
}
?>
<?php
if (isset($_SESSION['MensajeExito']) && $_SESSION['MensajeExito'] != "") { ?>
	<script>
		Swal.fire({
			title: "Transacción Exitosa!",
			icon: 'success',
			text: '<?php echo $_SESSION['MensajeExito'] ?>'

		})
	</script>

<?php
	$_SESSION['MensajeExito'] = "";
}
?>