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
					<h3 class="fw-bold text-gray-900 m-0">Edit Modul</h3>
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
					<form action="<?= base_url('data_modul/update/'.$data->id) ?>" method="post">
						<div class="row">
							<div class="col-md-6 mb-10">
								<label class="form-label required">Judul Modul</label>
								<input type="text" class="form-control" name="judul_modul" value="<?= $data->judul_modul ?>" placeholder="Masukkan Judul Modul"/>
							</div>
							<div class="col-md-6 mb-10">
								<label class="form-label required">Link Berkas</label>
								<input type="text" class="form-control" name="link_berkas" value="<?= $data->link_berkas ?>"  placeholder="Masukkan Link Berkas"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-10">
								<label class="form-label">Deskripsi</label>
								<div class="col-md-12">
									<textarea name="deskripsi" class="form-control" rows="3"><?= $data->deskripsi ?></textarea>
								</div>
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
