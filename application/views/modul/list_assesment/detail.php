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
					<h3 class="fw-bold text-gray-900 m-0">Detail Asesmen Guru PAUD</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr class="fw-bold fs-6 text-gray-800 px-7">
								<th class="text-center">No.</th>
								<th class="text-center">Komponen</th>
								<th class="text-center">Indikator</th>
								<th class="text-center">Analisis</th>
								<th class="text-center">Link Berkas</th>
								<th class="text-center">Status</th>
								<th class="text-center" width="12%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$CI =& get_instance();
								$i = 1;
								foreach ($data->result() as $value) {
							?>
								<tr>
									<td style="vertical-align: middle"><?= $i ?></td>
									<td style="vertical-align: middle"><?= $value->komponen ?></td>
									<td style="vertical-align: middle"><?= $value->indikator ?></td>
									<td style="vertical-align: middle; text-align: center"><?= $value->analisis ?></td>
									<td style="vertical-align: middle;">
										<?php
											if($value->analisis == 'ada') {
										?>
												<a href="<?= $value->link_berkas ?>" target="_blank" class="btn btn-primary btn-sm">download</a>
										<?php
											}
										?>
									</td>
									<td style="vertical-align: middle"><?= $value->status ?></td>
									<td style="vertical-align: middle; text-align: center;">
										<?php
											if($value->status == 'menunggu') {
										?>
												<a href='javascript:tolak("<?= $value->id ?>");' class='btn btn-danger btn-sm'><i class="ki-solid ki-cross-square" style="padding: 0;"></i></a>
												<a href='javascript:setujui("<?= $value->id ?>");' class='btn btn-primary btn-sm'><i class="ki-solid ki-check-square" style="padding: 0;"></i></a>
										<?php
											}
										?>
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
	function setujui(id) {
		Swal.fire({
			html: `Setujui data ini?`,
			icon: "warning",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Iya, Setujui",
			cancelButtonText: 'Batal',
			customClass: {
					confirmButton: "btn btn-primary",
					cancelButton: 'btn btn-danger'
			}
    }).then((value) => {
			if(value.isConfirmed) {
				var request = $.ajax({
					url: "<?= base_url('list_assesment/setujui'); ?>",
					method: "POST",
					data: { id },
					dataType: "json"
				});
				
				request.done(function( msg ) {
					if (msg.status == 'success') {
						Swal.fire(
							'Berhasil!',
							'Data berhasil disetujui .',
							'success'
						)
						.then((success_msg) => {
							window.location = "<?= base_url('list_assesment/detail/'.$username); ?>";
						})
					} else {
						Swal.fire(
							'Failed!',
							'Data gagal disetujui.',
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
	
	function tolak(id) {
		Swal.fire({
			html: `Tolak data ini?`,
			icon: "warning",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Iya, Tolak",
			cancelButtonText: 'Batal',
			customClass: {
					confirmButton: "btn btn-primary",
					cancelButton: 'btn btn-danger'
			}
    }).then((value) => {
			if(value.isConfirmed) {
				var request = $.ajax({
					url: "<?= base_url('list_assesment/tolak'); ?>",
					method: "POST",
					data: { id },
					dataType: "json"
				});
				
				request.done(function( msg ) {
					if (msg.status == 'success') {
						Swal.fire(
							'Berhasil!',
							'Data berhasil ditolak .',
							'success'
						)
						.then((success_msg) => {
							window.location = "<?= base_url('list_assesment/detail/'.$username); ?>";
						})
					} else {
						Swal.fire(
							'Failed!',
							'Data gagal ditolak.',
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
