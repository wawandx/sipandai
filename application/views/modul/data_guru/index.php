<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-10">
		<!--begin::Col-->
		<div class="col">
			<!--begin::Table widget 2-->
			<div class="card h-md-100">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0">
					<!--begin::Title-->
					<h3 class="fw-bold text-gray-900 m-0">DATA GURU</h3>
					<!--end::Title-->

					
				</div>
				<div>
					
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card">

					<div class="card-body pt-6">
						<div class="table-responsive">
							<table id="table-sipandai" class="table">
								<thead>
									<tr class="fw-bold fs-5 text-gray-900" >
										<th>No</th>
										<th style="text-align: center;">NIP</th>
										<th style="text-align: center;">Nama</th>
										<th style="text-align: center;">Email</th>
										<th style="text-align: center;">No Hanphone</th>
										<th style="text-align: center;">Tempat Lahir</th>
										<th style="text-align: center;">Tanggal Lahir</th>
										<th style="text-align: center;">Alamat</th>
									</tr>
								</thead>
								<tbody style="text-align: center;">
								<?php
									$no = 1;
									foreach ($data->result() as $value) {
									
									?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->nip ?></td>
										<td><?= $value->fullname ?></td>
										<td><?= $value->email ?></td>
										<td><?= $value->no_telp ?></td>
										<td><?= $value->tmpat_lahir ?></td>
										<td><?= $value->tgal_lahir ?></td>
										<td><?= $value->alamat ?></td>
										
									</tr>
								<?php
									}
								?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				
				<!--end: Card Body-->
			</div>
			<!--end::Table widget 2-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
<!--end::Content-->
<script>
	function deleteData(id) {
		Swal.fire({
			html: `Yakin ingin menghapus data?`,
			icon: "warning",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Iya, Hapus",
			cancelButtonText: 'Batal',
			customClass: {
					confirmButton: "btn btn-primary",
					cancelButton: 'btn btn-danger'
			}
    }).then((value) => {
			if(value.isConfirmed) {
				var request = $.ajax({
					url: "<?= base_url('Data_guru/delete'); ?>",
					method: "POST",
					data: { id },
					dataType: "json"
				});
				
				request.done(function( msg ) {
					if (msg.status == 'success') {
						Swal.fire(
							'Berhasil!',
							'Data berhasil dihapus .',
							'success'
						)
						.then((success_msg) => {
							window.location = "<?= base_url('Data_guru/index'); ?>";
						})
					} else {
						Swal.fire(
							'Failed!',
							'Data gagal dihapus.',
							'error'
						)
					}
				});
				
				request.fail(function( jqXHR, textStatus ) {
					alert( "Request failed: " + textStatus );
				});
			}
		});
	}
</script>
