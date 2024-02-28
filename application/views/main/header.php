<!--begin::Header primary-->
<div class="app-header-primary">
	<!--begin::Header primary container-->
	<div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
		<!--begin::Logo and search-->
		<div class="d-flex flex-stack align-items-stretch flex-grow-1 flex-lg-grow-0">
			<!--begin::Logo wrapper-->
			<div class="d-flex align-items-center me-7">
				<!--begin::Header secondary toggle-->
				<button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 ms-n3 me-2" id="kt_header_secondary_toggle">
					<i class="ki-duotone ki-abstract-14 fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</button>
				<!--end::Header secondary toggle-->
				<!--begin::Logo-->
				<a href="../../demo22/dist/index.html" class="d-flex align-items-center">
					<img alt="Logo" src="<?= base_url('assets/media/logos/demo22.png') ?>" class="h-25px h-lg-30px" />
				</a>
				<!--end::Logo-->
			</div>
			<!--end::Logo wrapper-->
		</div>
		<!--end::Logo and search-->
		<!--begin::Navbar-->
		<div class="app-navbar gap-2">
			<!--begin::User-->
			<div class="app-navbar-item" id="kt_header_user_menu_toggle">
				<!--begin::User info-->
				<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-3 pe-1" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
					<!--begin::Name-->
					<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
						<span class="text-white fs-8 fw-bold lh-1 mb-1">Max</span>
						<span class="text-white fs-8 opacity-75 fw-semibold lh-1">UX Designer</span>
					</div>
					<!--end::Name-->
					<!--begin::Symbol-->
					<div class="symbol symbol-30px symbol-md-40px">
						<img src="<?= base_url('assets/media/avatars/300-1.jpg') ?>" alt="image" />
					</div>
					<!--end::Symbol-->
				</div>
				<!--end::User info-->
				<!--begin::User account menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-50px me-5">
								<img alt="Logo" src="<?= base_url('assets/media/avatars/300-1.jpg') ?>" />
							</div>
							<!--end::Avatar-->
							<!--begin::Username-->
							<div class="d-flex flex-column">
								<div class="fw-bold d-flex align-items-center fs-5">Max Smith
								<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
								<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo22/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::User account menu-->
			</div>
			<!--end::User -->
			<!--begin::Aside toggle-->
			<!--end::Aside toggle-->
		</div>
		<!--end::Navbar-->
	</div>
	<!--end::Header primary container-->
</div>
<!--end::Header primary-->
