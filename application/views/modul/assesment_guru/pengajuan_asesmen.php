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
					<h3 class="fw-bold text-gray-900 m-0">Asesmen</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<form action="<?= base_url('asesment/post_pengajuan_asesmen') ?>" method="post">
						<table class="table table-bordered table-striped table-row-bordered gy-5 gs-7 border rounded">
							<thead>
								<tr>
									<th class="text-center" style="vertical-align: middle;" width="10%" rowspan="2"><b>Komponen</b></th>
									<th class="text-center" style="vertical-align: middle;" width="55%" rowspan="2"><b>Indikator</b></th>
									<th class="text-center" style="vertical-align: middle;" width="20%" colspan="2"><b>Analisis</b></th>
									<th class="text-center" style="vertical-align: middle;" width="15%" rowspan="2"><b>Link Berkas</b></th>
								</tr>
								<tr>
									<th class="text-center">Ada</th>
									<th class="text-center">Tdk Ada</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($data->result() as $value) {
								?>
									<tr>
										<td><?= $value->komponen ?></td>
										<td><?= $value->indikator ?></td>
										<td>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="analisis_<?= $value->id ?>" value="ada">
												<label class="form-check-label" for="inlineRadio1">Ada</label>
											</div>
										</td>
										<td>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="analisis_<?= $value->id ?>" value="tidak ada">
												<label class="form-check-label" for="inlineRadio2">Tidak Ada</label>
											</div>
										</td>
										<td>
											<input type="text" name="link_berkas_<?= $value->id ?>" class="form-control">
										</td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						
						<div class="row pt-5">
							<div class="col-md-12 text-end">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
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
