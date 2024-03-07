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
					<h3 class="fw-bold text-gray-900 m-0">Download Modul</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr class="fw-bold fs-6 text-gray-800 px-7">
								<th>No.</th>
								<th>Judul Modul</th>
								<th>Deskripsi</th>
								<th>Link Berkas</th>
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

