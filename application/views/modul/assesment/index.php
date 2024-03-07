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
					<h3 class="fw-bold text-gray-900 m-0">Management Assesment</h3>
					<!--end::Title-->

					<div class="card-header border-0 pt-6">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<!--begin::Add user-->
								<a href="<?= base_url('data_assesment/data_add'); ?>" class="btn btn-primary">
									<i class="ki-duotone ki-plus fs-2"></i>Add data
								</a>
							<!--end::Add user-->
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<div class="table-responsive">
						<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
							<thead>
								<tr class="fw-bold fs-5 text-gray-900">
									<th style="text-align: center;">No</th>
									<th style="text-align: center;">Komponen</th>
									<th style="text-align: center;">Indikator</th>
									<th style="text-align: center;">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$no = 1;
								foreach ($data->result() as $value) { ?>
								<tr>
									<td style="text-align: center;"><?= $no++ ?></td>
									<td><?= $value->komponen ?></td>
									<td><?= $value->indikator ?></td>
									<td style="text-align: center;">
										<span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
											<a href="<?= base_url('data_assesment/get_edit/'.$value->id); ?>" class="btn btn-sm btn-light-warning">
												Edit
											</a>
										</span>

										<a href='javascript:deleteData("<?= $value->id ?>");' class='btn btn-sm btn-light-danger'>Hapus</a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
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
					url: "<?= base_url('data_assesment/delete'); ?>",
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
							window.location = "<?= base_url('data_assesment/index'); ?>";
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
