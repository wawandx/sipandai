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
					<h3 class="fw-bold text-gray-900 m-0">Assesment</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-5">
					<?php
						if($data->num_rows() > 0){
							$total_data = $data->num_rows();
							$total_ada = $data_ada->num_rows();
							$menunggu_kepsek = $data_menunggu_kepsek->num_rows();
							$menunggu_assesor = $data_menunggu_assesor->num_rows();
							$nilai = ($total_ada/$total_data)*100;

							if($menunggu_kepsek != 0) {
								$title = "Menunggu Persetujuan Kepala Sekolah";	
							} else if($menunggu_assesor != 0) {
								$title = "Menunggu Persetujuan Assesor";
							} else {
								$title = "Menunggu Persetujuan Kepala Sekolah";
							}							
					?>
							<div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body bg-info">
								<!--begin::Body-->
								<div class="card-body d-flex flex-column">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column flex-grow-1">
										<!--begin::Title-->
										<span class="text-light fw-bold fs-3 text-center"><?= $title ?></span>
										<!--end::Title-->
										<p class="text-center mt-10 fs-6 text-light">
											Nilai Assesmen sementara <br><br>
											<span class="text-center text-light fw-bold fs-2"><?= number_format($nilai, 2, ',', '.') ?></span> <br><br>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail_modal">
												Detail Asesmen
											</button>

											<div class="modal modal-lg fade" tabindex="-1" id="detail_modal">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h3 class="modal-title">Detail Asesmen</h3>

															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																	<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
															</div>
															<!--end::Close-->
														</div>

														<div class="modal-body">
															<table class="table table-bordered table-striped table-row-bordered gy-5 gs-7 border rounded">
																<thead>
																	<tr>
																		<th class="text-center" style="vertical-align: middle;" width="10%"><b>Komponen</b></th>
																		<th class="text-center" style="vertical-align: middle;" width="55%"><b>Indikator</b></th>
																		<th class="text-center" style="vertical-align: middle;" width="20%"><b>Analisis</b></th>
																		<th class="text-center" style="vertical-align: middle;" width="15%"><b>Status</b></th>
																		<th class="text-center" style="vertical-align: middle;" width="15%"><b>Aksi</b></th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																		foreach ($data->result() as $value) {
																			if($value->status == 'menunggu kepsek') {
																				$status = 'Menunggu Persetujuan Kepsek';
																			} else if($value->status == 'menunggu assesor') {
																				$status = 'Menunggu Persetujuan Assesor';
																			} else {
																				$status = $value->status;
																			}
																	?>
																		<tr>
																			<td><?= $value->komponen ?></td>
																			<td><?= $value->indikator ?></td>
																			<td class="text-center"><?= $value->analisis ?></td>
																			<td class="text-center"><?= $status ?></td>																			<td class="text-center">
																				<?php  
																					if($value->status == 'menunggu kepsek' || $value->status == 'ditolak') {
																						echo '<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit" data-id="'.$value->id.'" data-komponen="'.$value->komponen.'" data-indikator="'.$value->indikator.'" data-analisis="'.$value->analisis.'" data-link_berkas="'.$value->link_berkas.'">Edit</button>
																						';
																					}
																				?>
																			</td>
																		</tr>
																	<?php
																		}
																	?>
																</tbody>
															</table>
														</div>

														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
										</p>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Body-->
							</div>
					<?php
						} else {
					?>
							<div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body bg-warning">
								<!--begin::Body-->
								<div class="card-body d-flex flex-column">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column flex-grow-1">
										<!--begin::Title-->
										<a href="<?= base_url('asesment/pengajuan_asesmen') ?>" class="text-light text-hover-primary fw-bold fs-3 text-center">Belum Mengajukan Asesmen</a>
										<!--end::Title-->
										<p class="text-center mt-10">
											Guru PAUD dapat menggunakan opsi 'ada' atau 'tidak ada' di aplikasi SIPANDAI untuk mengisi Instrumen Monitoring Perangkat Pembelajaran. <br>
											Silahkan klik tombol dibawah ini untuk melakukan Asesmen <br>
											<a href="<?= base_url('asesment/pengajuan_asesmen') ?>" class="btn btn-info mt-10">Lakukan Assesment</a>
										</p>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Body-->
							</div>
					<?php
						}
					?>
				</div>
				<!--end: Card Body-->
			</div>
			<!--end::Table widget 2-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
<div class="modal modal-lg fade" tabindex="-1" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Edit Assesmen</h3>

				<!--begin::Close-->
				<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
				</div>
				<!--end::Close-->
			</div>

			<form action="<?= base_url('asesment/update_assesmen') ?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="mb-3">
						<label class="form-label">Komponen</label>
						<input type="text" class="form-control form-control-solid" name="komponen" id="komponen" readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">Indikator</label>
						<input type="text" class="form-control form-control-solid" name="indikator" id="indikator" readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">Analisis</label>
						<select class="form-select" name="analisis" id="analisis">
							<option value="ada">Ada</option>
							<option value="tidak ada">Tidak Ada</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Link Berkas</label>
						<input type="text" class="form-control" name="link_berkas" id="link_berkas">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Ubah</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end::Content-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#modal_edit').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget); // Tombol yang memicu modal
      var id = button.data('id'); // Mengambil nilai id dari atribut data-id
      var komponen = button.data('komponen'); // Mengambil nilai komponen dari atribut data-komponen
      var indikator = button.data('indikator'); // Mengambil nilai indikator dari atribut data-indikator
      var analisis = button.data('analisis'); // Mengambil nilai analisis dari atribut data-analisis
      var link_berkas = button.data('link_berkas'); // Mengambil nilai link_berkas dari atribut data-link_berkas

      // Menetapkan nilai atribut data ke dalam elemen formulir modal
      var modal = $(this);
      modal.find('#id').val(id);
      modal.find('#komponen').val(komponen);
      modal.find('#indikator').val(indikator);
      modal.find('#analisis').val(analisis);
      modal.find('#link_berkas').val(link_berkas);
    });
  });
</script>
