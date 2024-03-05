<script>
	var hostUrl = "<?= base_url('assets/') ?>";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?= base_url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') ?>"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.js') ?>"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="<?= base_url('assets/js/widgets.bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/custom/widgets.js') ?>"></script>
<script src="<?= base_url('assets/js/custom/apps/chat/chat.js') ?>"></script>
<script src="<?= base_url('assets/js/custom/utilities/modals/users-search.js') ?>"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
<script>
	<?php
    if($this->session->flashdata('success_save')){
  ?>
      Swal.fire({
        text: "Data berhasil disimpan",
        icon: "success",
    	});
  <?php
      $this->session->unset_userdata('success_save');
    } else if($this->session->flashdata('error_save')){
  ?>
      Swal.fire({
        text: "Data gagal disimpan",
        icon: "error",
    	});
  <?php
      $this->session->unset_userdata('error_save');        
    } else if($this->session->flashdata('success_update')){
  ?>
      Swal.fire({
        text: "Data berhasil dirubah",
        icon: "success",
    	});
  <?php
      $this->session->unset_userdata('success_update');
    }  else if($this->session->flashdata('error_update')){
  ?>
      Swal.fire({
        text: "Data gagal dirubah",
        icon: "error",
    	});
  <?php
      $this->session->unset_userdata('error_update');
    }
  ?>

  $("#table-sipandai").DataTable({
    "language": {
      "lengthMenu": "Show _MENU_",
    },
    "dom":
      "<'row'" +
      "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
      "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
      ">" +

      "<'table-responsive'tr>" +

      "<'row'" +
      "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
      "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
      ">"
  });
</script>
