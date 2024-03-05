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
					<h3 class="fw-bold text-gray-900 m-0">Manajemen Users</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<a href="<?= base_url('manajemen_users/add') ?>" class="btn btn-primary btn-sm">Add User</a>
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr class="fw-bold fs-6 text-gray-800 px-7">
								<th>Username</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>No. Telp</th>
								<th>Alamat</th>
								<th>Level</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($data->result() as $value) {
							?>
								<tr>
									<td style="vertical-align: middle"><?= $value->username ?></td>
									<td style="vertical-align: middle"><?= $value->fullname ?></td>
									<td style="vertical-align: middle"><?= $value->email ?></td>
									<td style="vertical-align: middle"><?= $value->no_telp ?></td>
									<td style="vertical-align: middle"><?= $value->alamat ?></td>
									<td style="vertical-align: middle"><?= $value->level ?></td>
									<td style="vertical-align: middle">
										<a href="<?= base_url('manajemen_users/edit/'.$value->username) ?>" class="btn btn-primary btn-sm">Edit</a>
										<a href='javascript:deleteData("<?= $value->username ?>");' class='btn btn-danger btn-sm'>Delete</a>
									</td>
								</tr>
							<?php
								}
							?>
						</tbody>
				</table>
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
					url: "<?= base_url('manajemen_users/delete_user'); ?>",
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
							window.location = "<?= base_url('manajemen_users/index'); ?>";
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
