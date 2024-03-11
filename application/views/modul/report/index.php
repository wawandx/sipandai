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
					<h3 class="fw-bold text-gray-900 m-0">Menu Report </h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<table id="table-sipandai" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
						<thead>
							<tr>
								<th>List Report</th>
								<th>Download</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Download Data Guru</td>
								<td>
									<a href="<?= base_url('report/guru') ?>" class="btn btn-info btn-sm">Download</a>
								</td>
							</tr>
							<tr>
								<td>Download Data Assesmen</td>
								<td>
									<a href="<?= base_url('report/assesmen') ?>" class="btn btn-info btn-sm">Download</a>
								</td>
							</tr>
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
