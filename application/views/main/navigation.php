<!--begin::Header secondary-->
<div class="app-header-secondary app-header-mobile-drawer" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_secondary_toggle" data-kt-sticky="true" data-kt-sticky-name="app-header-secondary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header'}">
	<!--begin::Header secondary container-->
	<div class="app-container container-xxl app-container-fit-mobile d-flex align-items-stretch">
		<!--begin::Menu wrapper-->
		<div class="header-menu d-flex align-items-stretch w-100">
			<!--begin::Menu-->
			<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
				<?php
					if($this->session->id_level == 1) {
				?>

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('dashboard'); ?>">
								<span class="menu-title">
									<span class="menu-text">Home</span>
									<span class="menu-desc">Menu Utama</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('data_guru'); ?>">
								<span class="menu-title">
									<span class="menu-text">Data Guru</span>
									<span class="menu-desc">List Data Guru</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('data_assesor'); ?>">
								<span class="menu-title">
									<span class="menu-text">Data Asesor</span>
									<span class="menu-desc">List Data Asesor</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('data_modul'); ?>">
								<span class="menu-title">
									<span class="menu-text">Data Modul</span>
									<span class="menu-desc">Manajemen Modul</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('data_assesment'); ?>">
								<span class="menu-title">
									<span class="menu-text">Data Asesmen</span>
									<span class="menu-desc">Manajemen Asesmen</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('report'); ?>">
								<span class="menu-title">
									<span class="menu-text">Report</span>
									<span class="menu-desc">Download Report</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->

						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link py-3" href="<?= base_url('manajemen_users'); ?>">
								<span class="menu-title">
									<span class="menu-text">Users</span>
									<span class="menu-desc">Manajemen Users</span>
								</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
				<?php
					} else if($this->session->id_level == 2) {
				?>
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('dashboard'); ?>">
							<span class="menu-title">
								<span class="menu-text">Home</span>
								<span class="menu-desc">Menu Utama</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('download_modul'); ?>">
							<span class="menu-title">
								<span class="menu-text">Download Modul</span>
								<span class="menu-desc">Menu Modul</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('asesment'); ?>">
							<span class="menu-title">
								<span class="menu-text">Asesment</span>
								<span class="menu-desc">Menu Asesment</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('biodata'); ?>">
							<span class="menu-title">
								<span class="menu-text">Biodata</span>
								<span class="menu-desc">Menu Biodata</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				<?php
					} else if($this->session->id_level == 3) {
				?>
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('dashboard'); ?>">
							<span class="menu-title">
								<span class="menu-text">Home</span>
								<span class="menu-desc">Menu Utama</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('list_assesment'); ?>">
							<span class="menu-title">
								<span class="menu-text">Asesment Guru</span>
								<span class="menu-desc">List Asesment Guru</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				<?php
					} else if($this->session->id_level == 4) {
				?>
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('dashboard'); ?>">
							<span class="menu-title">
								<span class="menu-text">Home</span>
								<span class="menu-desc">Menu Utama</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('report'); ?>">
							<span class="menu-title">
								<span class="menu-text">Report</span>
								<span class="menu-desc">Download Report</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				<?php
					} else if($this->session->id_level == 5) {
				?>
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('dashboard'); ?>">
							<span class="menu-title">
								<span class="menu-text">Home</span>
								<span class="menu-desc">Menu Utama</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-3" href="<?= base_url('list_assesment'); ?>">
							<span class="menu-title">
								<span class="menu-text">Asesment Guru</span>
								<span class="menu-desc">List Asesment Guru</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				<?php
					} 
				?>
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Menu wrapper-->
	</div>
	<!--end::Header secondary container-->
</div>
<!--end::Header secondary-->
