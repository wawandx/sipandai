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
					<h3 class="fw-bold text-gray-900 m-0">Biodata Guru</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
						
                    <div class="d-flex flex-column flex-column-fluid">

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Contacts App- Add New Contact-->
                            <div class="row g-7">
                                
                                <!--begin::Content-->
                                <div class="col-xl-12">
                                    <!--begin::Contacts-->
                                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                                       
                                        <!--begin::Card body-->
                                        <div class="card-body pt-5">
                                            <!--begin::Form-->
                                            <form class="form" action="<?= base_url('biodata/data_update/'.$this->session->username); ?>" method="post">
                                                
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">NIP</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="nip" value="<?= $data->nip ?>" require readonly />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Nama</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="nama" value="<?= $data->fullname ?>" readonly />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Row-->
                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                                <span class="required">Tempat Lahir</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="tmpat_lahir" value="<?= $data->tmpat_lahir ?>" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                                <span class="required">Tanggal Lahir</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <div class="w-100">
                                                                <!--begin::date-->
                                                               <input type="date" class="form-control form-control-solid" name="tgal_lahir" value="<?= $data->tgal_lahir ?>">
                                                                <!--end::date-->
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>

                                                <!--begin::Row-->
                                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                                <span class="required">Pangkat</span>
                                                            </label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="pangkat" value="<?= $data->pangkat ?>" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                                <span class="required">Golongan</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-solid" name="golongan" value="<?= $data->golongan ?>"/>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Jenjang Pendidikan Akhir</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <select class="form-select" name="jenjang_akhir">
                                                        <option value="">- Pilih Jenjang Pendidikan Akhir -</option>
                                                        <option value="SD"> SD </option>
                                                        <option value="SMP"> SMP </option>
                                                        <option value="SMA"> SMA </option>
                                                        <option value="D1"> D1 </option>
                                                        <option value="D2"> D2 </option>
                                                        <option value="D3"> D3 </option>
                                                        <option value="D4"> D4 </option>
                                                        <option value="S1"> S1 </option>
                                                        <option value="S2"> S2 </option>
                                                        <option value="S3"> S3 </option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Nama Institusi Pendidikan akhir</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="nm_institusi_pendidikan_akhir" value="<?= $data->nama_institut_pendidikan_akhir ?>"></input>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Jurusan</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="jurusan" value="<?= $data->jurusan ?>"></input>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Tahun Lulus</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" name="tahun_lulus" value="<?= $data->tahun_lulus ?>"></input>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Separator-->
                                                <div class="separator mb-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Action buttons-->
                                                <div class="d-flex justify-content-end">

                                                    <!--begin::Button-->
                                                    <!-- <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button> -->
                                                    <!--end::Button-->

                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                                <!--end::Action buttons-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Card body-->

                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Contacts App- Add New Contact-->
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
