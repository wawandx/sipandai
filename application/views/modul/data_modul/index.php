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
					<h3 class="fw-bold text-gray-900 m-0">MANAJEMEN MODUL</h3>
					<!--end::Title-->

					<div class="card-header border-0 pt-6">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<!--begin::Add user-->
								<a href="<?= base_url('data_modul/add') ?>" class="btn btn-primary">
									<i class="ki-duotone ki-plus fs-2"></i>Add data
								</a>
							<!--end::Add user-->
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!-- <a href="<?= base_url('data_modul/add') ?>" class="btn btn-primary btn-sm">Add Modul</a> -->
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr class="fw-bold fs-6 text-gray-800 px-7">
								<th>No.</th>
								<th>Judul Modul</th>
								<th>Deskripsi</th>
								<th>Link Berkas</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach ($data->result() as $value) {
							?>
								<tr>
									<td style="vertical-align: middle"><?= $i ?></td>
									<td style="vertical-align: middle"><?= $value->judul_modul ?></td>
									<td style="vertical-align: middle"><?= $value->deskripsi ?></td>
									<td style="vertical-align: middle">
										<a href="<?= $value->link_berkas ?>" target="_blank" class="btn btn-primary btn-sm">Download</a>	
									</td>
									<td style="vertical-align: middle">
										<a href="<?= base_url('data_modul/edit/'.$value->id) ?>" class="btn btn-primary btn-sm">Edit</a>
										<a href='javascript:deleteData("<?= $value->id ?>");' class='btn btn-danger btn-sm'>Delete</a>
									</td>
								</tr>
							<?php
									$i++;
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
					url: "<?= base_url('data_modul/delete_modul'); ?>",
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
							window.location = "<?= base_url('data_modul/index'); ?>";
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
