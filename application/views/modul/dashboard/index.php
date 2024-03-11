<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-10">
		<!--begin::Col-->
		<div class="col">
			<!--begin::Table widget 2-->
			<div class="card h-md-100">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0" style="justify-content: center;">
					<!--begin::Title-->
					<h3 class="fw-bold text-gray-900 m-0">Si PANDAI</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr>
								<th>No.</th>
								<th>Predikat</th>
								<th class="text-center">Jumlah</th>
							</tr>
						</thead>
						<?php
							$CI =& get_instance();
							$nilai_profesional = 0;
							$nilai_layak = 0;
							$nilai_pembinaan = 0;
							$nilai_dipertimbangkan = 0;
							foreach ($guru->result() as $value) {
								$jumlah_keseluruhan = $CI->report_model->get_asesmen_by_username($value->username)->num_rows();
								$jumlah_ada = $CI->report_model->get_asesmen_guru_ada($value->username)->num_rows();
								$nilai = ($jumlah_ada/$jumlah_keseluruhan)*100;
								
								$predikat = "";
								if($nilai > 85) {
									$nilai_profesional = $nilai_profesional + 1;							
								} else if($nilai > 70) {
									$nilai_layak = $nilai_layak + 1;
								} else if($nilai > 55) {
									$nilai_pembinaan = $nilai_pembinaan + 1;
								} else if($nilai <= 55) {
									$nilai_dipertimbangkan = $nilai_dipertimbangkan + 1;
								}								
							}
						?>
						<tbody>
							<tr>
								<td>1</td>
								<td>Professional</td>
								<td class="text-center"><?= $nilai_profesional; ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Layak</td>
								<td class="text-center"><?= $nilai_layak; ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Pembinaan</td>
								<td class="text-center"><?= $nilai_pembinaan; ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Dipertimbangkan</td>
								<td class="text-center"><?= $nilai_dipertimbangkan; ?></td>
							</tr>
						</tbody>
					</table>
					<!-- <p style="font-size: 14px">
						Selamat Datang pada Aplikasi Si PANDAI (Sistem Pembelajaran dan Asesmen Anak Usia Dini)
						<br><br>
						<img src="<?= base_url('assets/images/logo-paud.png') ?>" style="width: 250px;" />
					</p> -->
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
