<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-xl-10" >
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

			<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10">

				<div class="card card-flush h-md-500 mb-5 mb-xl-10">
					<!--begin::Header-->
					<div class="card-header pt-5">
						<!--begin::Title-->
						<div class="card-title d-flex flex-column">   
							<!--begin::Subtitle-->
							<span class="text-gray-500 pt-1 fw-semibold fs-6">Diagram</span>
							<!--end::Subtitle--> 
						</div>
						<!--end::Title-->      
					</div>
					<!--end::Header-->

					<!--begin::Card body-->
					<div class="card-body pt-2 pb-4 d-flex align-items-center">
						<!--begin::Chart-->
						<div class="d-flex flex-center me-5 pt-2">
							<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
								<span>

								</span>
								<canvas height="0" width="50">

								</canvas>
							</div>
						</div>
						<!--end::Chart-->
						
						<!--begin::Labels-->
						<div class="d-flex flex-column content-justify-center w-100">
							<!--begin::Label-->
							<div class="d-flex fs-6 fw-semibold align-items-center">
								<!--begin::Bullet-->
								<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
								<!--end::Bullet-->

								<!--begin::Label-->
								<div class="text-gray-500 flex-grow-1 me-4">Profesional</div>
								<!--end::Label-->

								<!--begin::Stats-->
								<div class="fw-bolder text-gray-700 text-xxl-end"><?= $nilai_profesional; ?></div>
								<!--end::Stats-->
							</div>
							<!--end::Label-->

							<!--begin::Label-->
							<div class="d-flex fs-6 fw-semibold align-items-center my-3">
								<!--begin::Bullet-->
								<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
								<!--end::Bullet-->

								<!--begin::Label-->
								<div class="text-gray-500 flex-grow-1 me-4">Layak</div>
								<!--end::Label-->

								<!--begin::Stats-->
								<div class="fw-bolder text-gray-700 text-xxl-end"><?= $nilai_layak; ?></div>
								<!--end::Stats-->                    
							</div>
							<!--end::Label-->

							<!--begin::Label-->
							<div class="d-flex fs-6 fw-semibold align-items-center">
								<!--begin::Bullet-->
								<div class="bullet w-8px h-6px rounded-2 bg-warning me-3"></div>
								<!--end::Bullet-->

								<!--begin::Label-->
								<div class="text-gray-500 flex-grow-1 me-4">Pembinaan</div>
								<!--end::Label-->

								<!--begin::Stats-->
								<div class=" fw-bolder text-gray-700 text-xxl-end"><?= $nilai_pembinaan; ?></div>
								<!--end::Stats-->                      
							</div>
							<!--end::Label-->

							<!--begin::Label-->
							<div class="d-flex fs-6 fw-semibold align-items-center my-3">
								<!--begin::Bullet-->
								<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
								<!--end::Bullet-->

								<!--begin::Label-->
								<div class="text-gray-500 flex-grow-1 me-4">Dipertimbangkan</div>
								<!--end::Label-->

								<!--begin::Stats-->
								<div class=" fw-bolder text-gray-700 text-xxl-end"><?= $nilai_dipertimbangkan; ?></div>
								<!--end::Stats-->                      
							</div>
							<!--end::Label-->
						</div>
						<!--end::Labels-->
					</div>
					<!--end::Card body-->
				</div>

				<div class="card card-flush overflow-hidden h-md-97">

					<!--begin::Header-->
					<div class="card-header py-5">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">            
							<span class="card-label fw-bold text-gray-900">Chart Balok</span>
						</h3>
						<!--end::Title-->
					</div>
					<!--end::Header-->

					<!--begin::Card widget 6-->
					<div class="card card-flush h-md-50 mb-5 mb-xl-10">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<div class="card-title d-flex flex-column">
								<!--begin::Subtitle-->
								<span class="text-gray-400 pt-1 fw-semibold fs-6">Data Seluru Guru</span>
								<!--end::Subtitle-->
							</div>
							<!--end::Title-->
						</div>
						<!--end::Header-->
						<!--begin::Card body-->
						<div class="card-body d-flex align-items-end px-0 pb-0">
							<!--begin::Chart-->
							<div id="kt_card_widget_6_chart" class="w-100" style="height: 88px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card widget 6-->

				</div>
				
			</div>

			<div class="col-lg-12 col-xl-12 col-xxl-8 mb-5 mb-xl-0">
				<div class="card card-flush overflow-hidden h-md-100">
					<div class="card-header py-5">
						<div class="card-header align-items-center border-0" style="justify-content: center;">
							<!--begin::Title-->
							<h3 class="fw-bold text-gray-900 m-0">Si PANDAI</h3>
							<!--end::Title-->
						</div>
					</div>

					<div class="card-body pt-2">
						<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
							<thead>
								<tr>
									<th>No.</th>
									<th>Predikat</th>
									<th class="text-center">Jumlah</th>
								</tr>
							</thead>
							
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
					</div>
				</div>
			</div>
	</div>
	<!--end::Row-->
</div>
<!--end::Content-->
