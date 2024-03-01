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
					<h3 class="fw-bold text-gray-900 m-0">MANAGEMENT GURU</h3>
					<!--end::Title-->

					<div class="card-header border-0 pt-6">
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<!--begin::Add user-->
								<a href="<?= base_url('data_guru/data_add'); ?>" class="btn btn-primary">
									<i class="ki-duotone ki-plus fs-2"></i>Add data
								</a>
							<!--end::Add user-->
						</div>
					</div>
				</div>
				<div>
					
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card">

					<div class="card-body pt-6">
						<div class="table-responsive">
							<table class="table">
								<thead style="text-align: center;">
									<tr class="fw-bold fs-5 text-gray-900">
										<th>No</th>
										<th>NIP</th>
										<th>Nama</th>
										<th>No Hanphone</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody style="text-align: center;">
									<tr>
										<td>1</td>
										<td>7878279120</td>
										<td>Nurlinda</td>
										<td>0853-xxxx-xxxx</td>
										<td>Palu</td>
										<td>22-okt-1993</td>
										<td>Jln. Sisingamangaraja</td>
										<td>
											<span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
												<a href="<?= base_url('data_guru/get_edit'); ?>" class="btn btn-sm btn-light-warning">
													Edit
												</a>
											</span>

											<span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
												<a href="#" class="btn btn-sm btn-light-danger" onclick="return confirm('Anda Yakin menghapus!!')">
													Hapus
												</a>
											</span>
										</td>
									</tr>
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
