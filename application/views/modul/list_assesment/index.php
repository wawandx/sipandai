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
					<h3 class="fw-bold text-gray-900 m-0">Daftar Asesmen Guru PAUD</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr class="fw-bold fs-6 text-gray-800 px-7">
								<th>No.</th>
								<th>Nama Lengkap</th>
								<th>Status</th>
								<th>Predikat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								
								$CI =& get_instance();
								$i = 1;
								foreach ($data->result() as $value) {
									$total_data = $this->asesmen_model->get_asesmen_guru($value->username)->num_rows();
									$total_ada = $this->asesmen_model->get_asesmen_guru_ada($value->username)->num_rows();
									$nilai = ($total_ada/$total_data)*100;

									if ($nilai > 86){
										$predikat = 'Profesional';
									}elseif($nilai >= 71){
										$predikat = 'Layak';
									}elseif($nilai >= 56){
										$predikat = 'pembinaan';
									}elseif($nilai < 56){
										$predikat = 'Dipertimbangkan'; 
									}
									
									$keseluruhan = $CI->asesmen_model->get_asesmen_guru($value->username)->num_rows();
									$ada = $CI->asesmen_model->get_asesmen_guru_ada($value->username)->num_rows();
									$status = '';
									if($keseluruhan == $ada){
										$status = 'Disetujui';
									} else {
										$status = 'Belum Disetujui';
									}
							?>
								<tr>
									<td style="vertical-align: middle"><?= $i ?></td>
									<td style="vertical-align: middle"><?= $value->fullname ?></td>
									<td style="vertical-align: middle"><?= $status ?></td>
									<td style="vertical-align: middle">
										<?php  
											echo 	$predikat. ' - '. number_format($nilai, 2, ',', '.'); 										
										?>
									</td>
									<td style="vertical-align: middle">
										<a href="<?= base_url('list_assesment/detail/'.$value->username) ?>" class="btn btn-primary btn-sm">Detail</a>	
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

