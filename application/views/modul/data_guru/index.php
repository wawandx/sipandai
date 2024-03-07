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
					<h3 class="fw-bold text-gray-900 m-0">MANAGEMENT GURU</h3>
					<!--end::Title-->

					<div class="card-header border-0 pt-6">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<!--begin::Add user-->
								<a href="<?= base_url('data_guru/data_add'); ?>" class="btn btn-primary">
									<i class="ki-duotone ki-plus fs-2"></i>Add data
								</a>
							<!--end::Add user-->
						</div>
					</div>
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
										<th style="text-align: center;">Action</th>
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
										<td><?= $value->nama ?></td>
										<td><?= $value->email ?></td>
										<td><?= $value->phone ?></td>
										<td><?= $value->tmpat_lahir ?></td>
										<td><?= $value->tgal_lahir ?></td>
										<td><?= $value->alamat ?></td>
										<td>
											<span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
												<a href="<?= base_url('data_guru/get_edit/'.$value->id); ?>" class="btn btn-sm btn-light-warning">
													Edit
												</a>
											</span>

											<a href='javascript:deleteData("<?= $value->id ?>");' class='btn btn-sm btn-light-danger'>Delete</a>
										</td>
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
