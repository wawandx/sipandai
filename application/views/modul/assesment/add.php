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
					<h3 class="fw-bold text-gray-900 m-0">Add Data Assessment</h3>
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
                                            <form class="form" action="<?= base_url('data_assesment/data_save'); ?>" method="post">
                                                
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Komponen</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <select class="form-select" name="komponen">
                                                        <option value="">- Pilih Komponen -</option>
                                                        <option value="Dokumen Administrasi"> Dokumen Administrasi </option>
                                                        <option value="Dokumen Pembelajaran"> Dokumen Pembelajaran </option>
                                                        <option value="Dokumen Penilaian"> Dokumen Penilaian </option>
                                                        <option value="Dokumen Pengembangan Keprofesian Berkelanjutan"> Dokumen Pengembangan Keprofesian Berkelanjutan </option>
                                                    </select>

                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Indikator</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control" name="indikator"/>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Separator-->
                                                <div class="separator mb-6"></div>
                                                <!--end::Separator-->

                                                <!--begin::Action buttons-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
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
