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
					<h3 class="fw-bold text-gray-900 m-0">Edit User</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<?php
						if (validation_errors()) {
					?>
						<!--begin::Alert-->
						<div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
							<i class="ki-duotone ki-information fs-2hx text-light me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
							<div class="d-flex flex-column text-light pe-0 pe-sm-10">
								<h3 class="mb-5 text-light mt-2">Terdapat masalah</h3>
								<span><?= validation_errors(); ?></span>
							</div>
							<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
								<i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span class="path2"></span></i>
							</button>
						</div>
					<?php
						}
					?>
					<form action="<?= base_url('manajemen_users/update/'.$data->username) ?>" method="post">
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Username</label>
								<input type="text" class="form-control form-control-solid" readonly name="username" value="<?= $data->username ?>" placeholder="Masukkan Username"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Masukkan jika ingin ubah password"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Nama Lengkap</label>
								<input type="text" class="form-control" name="fullname" value="<?= $data->fullname ?>" placeholder="Masukkan Nama Lengkap"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label required">Email</label>
								<input type="email" class="form-control" name="email" value="<?= $data->email ?>" placeholder="Masukkan email"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Nomor Telpon/HP</label>
								<input type="text" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telpon" value="<?= $data->no_telp ?>"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label required">Level</label>
								<select class="form-select" name="level">
									<option value="">- Pilih Level -</option>
									<?php
										foreach ($level->result() as $value) {
											$selected = "";
											if ($data->id_level == $value->id) {
												$selected = "selected";
											}
									?>
											<option value="<?= $value->id ?>" <?= $selected ?>><?= $value->level ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="row">
							<label class="form-label required">Alamat</label>
							<div class="col-md-12">
								<textarea name="alamat" class="form-control" rows="3"><?= $data->alamat ?></textarea>
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
