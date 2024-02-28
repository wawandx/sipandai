<?php
  $CI =& get_instance();

  if ($this->session->username == "" ) {
    //redirect('auth');
  }
?>
<!DOCTYPE html>
<html>
	<!--begin::Head-->
	<head>
		<base href=""/>
		<title>Si Pandai</title>
		<meta charset="utf-8" />
		<meta name="description" content="Sistem Pembelajaran dan Asessmen Anak Usia Dini (Si PANDAI)" />
		<meta name="keywords" content="Assesmen Anak Usia Dini, Sistem Pembelajaran, Si PANDAI" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Si PANDAI" />
		<meta property="og:url" content="<?= base_url('sipandai') ?>" />
		<meta property="og:site_name" content="Si Pandai" />
		<?= $CI->load->view('main/css', '', TRUE); ?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<?= $CI->load->view('main/header', '', TRUE); ?>  
					<?= $CI->load->view('main/navigation', '', TRUE); ?>
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl d-flex flex-row flex-column-fluid">
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								<?= $modul ?>
							</div>
							<!--end::Content wrapper-->
							<?= $CI->load->view('main/footer', '', TRUE); ?>
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<?= $CI->load->view('main/js', '', TRUE); ?>
	</body>
	<!--end::Body-->
</html>
