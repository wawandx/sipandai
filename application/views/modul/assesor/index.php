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
					<h3 class="fw-bold text-gray-900 m-0">DATA ASSESOR</h3>
					<!--end::Title-->

					<!-- <div class="card-header border-0 pt-6">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							begin::Add user-->
								<!-- <a href="<?= base_url('data_assesor/data_add'); ?>" class="btn btn-primary">
									<i class="ki-duotone ki-plus fs-2"></i>Add data
								</a> -->
							<!--end::Add user-->
						<!--</div>
					</div> -->
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
									<tr class="fw-bold fs-5 text-gray-900">
										<th style="text-align: center;">No</th>
										<th style="text-align: center;">NIP</th>
										<th style="text-align: center;">Nama</th>
										<!-- <th>Action</th> -->
									</tr>
								</thead>
								<tbody style="text-align: center;">
								<?php
									$no = 1;
									foreach ($data->result() as $value) { ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->nip ?></td>
										<td><?= $value->fullname ?></td>
										
									</tr>
								<?php } ?>
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