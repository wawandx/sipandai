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
					<h3 class="fw-bold text-gray-900 m-0">Add User</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<form action="<?= base_url('manajemen_users/post') ?>" method="post">
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Username</label>
								<input type="text" class="form-control" name="username" placeholder="Masukkan Username"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label required">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Masukkan Password"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Nama Lengkap</label>
								<input type="text" class="form-control" name="fullname" placeholder="Masukkan Nama Lengkap"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label required">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Masukkan email"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Nomor Telpon/HP</label>
								<input type="text" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telpon"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label required">Level</label>
								<select class="form-select" name="level">
									<option value="">- Pilih Level -</option>
									<?php
										foreach ($level->result() as $value) {
									?>
											<option value="<?= $value->id ?>"><?= $value->level ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="row">
							<label class="form-label required">Alamat</label>
							<div class="col-md-12">
								<textarea name="alamat" class="form-control" rows="3"></textarea>
							</div>
						</div>
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