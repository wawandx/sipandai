<!-- latest jquery-->
<script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
<!-- feather icon js-->
<script src="<?= base_url('assets/js/icons/feather-icon/feather.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/icons/feather-icon/feather-icon.js'); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?= base_url('assets/js/sidebar-menu.js'); ?>"></script>
<script src="<?= base_url('assets/js/config.js'); ?>"></script>
<!-- Bootstrap js-->
<script src="<?= base_url('assets/js/bootstrap/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
<!-- Plugins JS start-->

<script src="<?= base_url('assets/js/datepicker/date-picker/datepicker.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/date-picker/datepicker.en.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/date-picker/datepicker.custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/chartist/chartist.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/chartist/chartist-plugin-tooltip.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/knob/knob.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/knob/knob-chart.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/apex-chart/apex-chart.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/apex-chart/stock-prices.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart/chartjs/chart.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/prism/prism.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/clipboard/clipboard.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/counter/jquery.waypoints.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/counter/jquery.counterup.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/counter/counter-custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom-card/custom-card.js'); ?>"></script>
<script src="<?= base_url('assets/js/notify/bootstrap-notify.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-au-mill.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-in-mill.js'); ?>"></script>
<script src="<?= base_url('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js'); ?>"></script>
<script src="<?= base_url('assets/js/dashboard/default.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/date-picker/datepicker.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/date-picker/datepicker.en.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/date-picker/datepicker.custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/datatable/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/datatable/datatables/datatable.custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/select2/select2.full.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/select2/select2-custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/sweet-alert/sweetalert.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/sweet-alert/app.js'); ?>"></script>
<script src="<?= base_url('assets/js/dropzone/dropzone.js'); ?>"></script>
<script src="<?= base_url('assets/js/dropzone/dropzone-script.js'); ?>"></script>
<script src="<?= base_url('assets/js/todo/todo.js'); ?>"></script>
<script src="<?= base_url('assets/js/tooltip-init.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/daterange-picker/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/daterange-picker/daterangepicker.js'); ?>"></script>
<script src="<?= base_url('assets/js/datepicker/daterange-picker/daterange-picker.custom.js'); ?>"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<!-- login js-->
<!-- Plugin used-->
<script>
  <?php
    if($this->session->flashdata('success_save')){
  ?>
      swal("Sukses", "Data berhasil tersimpan", "success");
  <?php
      $this->session->unset_userdata('success_save');
    } else if($this->session->flashdata('error_save')){
  ?>
      swal("Gagal", "Data gagal tersimpan", "error");
  <?php
      $this->session->unset_userdata('error_save');        
    } else if($this->session->flashdata('success_update')){
  ?>
      swal("Sukses", "Data berhasil terubah", "success");
  <?php
      $this->session->unset_userdata('success_update');
    }  else if($this->session->flashdata('error_update')){
  ?>
      swal("Gagal", "Data gagal terubah", "error");
  <?php
      $this->session->unset_userdata('error_update');
    }
  ?>
  
  function deleteData(id, menu) {
    swal({
      title: 'Yakin ingin menghapus data?',
      text: "Data yang dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      buttons: {
        cancel: "Batal",
        deleted: {
          text: "Iya, hapus data!",
          value: "deleted",
                }
      },
    })
    .then((value) => {
      switch (value) {
        case "deleted":
          var request = $.ajax({
            url: "<?= base_url(); ?>" + menu + "/delete",
            method: "POST",
            data: { id : id },
            dataType: "json"
          });
          
          request.done(function( msg ) {
            if (msg.status == 'success') {
              swal(
                'Deleted!',
                'Data berhasil di hapus.',
                'success'
              )
              .then((success_act) => {
                window.location = "<?= base_url(); ?>" + menu;
              })
            } else {
              swal(
                'Failed!',
                'Data gagal di hapus.',
                'error'
              )
            }
          });
          
          request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          });
        break;
        default:
          swal("Data batal dihapus!");
      }
    })
  }

  function number_format (number, decimals, decPoint, thousandsSep) { 
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
    var n = !isFinite(+number) ? 0 : +number
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
    var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
    var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
    var s = ''

    var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec)
    return '' + (Math.round(n * k) / k)
      .toFixed(prec)
    }

    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || ''
      s[1] += new Array(prec - s[1].length + 1).join('0')
    }

    return s.join(dec)
  }

  function pimpinanValidation(id) {
    swal({
      title: 'Yakin ingin memvalidasi Kinerja?',
      text: "Data akan divalidasi",
      icon: 'warning',
      buttons: {
        cancel: "Batal",
        deleted: {
          text: "Iya, verifikasi!",
          value: "deleted",
                }
      },
    })
    .then((value) => {
      switch (value) {
        case "deleted":
          var request = $.ajax({
            url: "<?= base_url(); ?>" + "validasi_kinerja/validasi_pimpinan",
            method: "POST",
            data: { id },
            dataType: "json"
          });
          
          request.done(function( msg ) {
            if (msg.status == 'success') {
              swal(
                'Berhasi!',
                'Kinerja berhasil divalidasi.',
                'success'
              )
              .then((success_act) => {
                const status = `#status-${id}`;
                const action = `#action-${id}`;
                $(status).html(`disetujui`);
                $(action).html(``);                
              })
            } else {
              swal(
                'Failed!',
                'Kinerja gagal divalidasi.',
                'error'
              )
            }
          });
          
          request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          });
        break;
        default:
          swal("Kinerja batal divalidasi!");
      }
    })
  }

  function fotoValidation(id, tanggal) {
    swal({
      title: 'Apakah foto tidak sesuai?',
      text: "Validasi Foto pegawai",
      icon: 'warning',
      buttons: {
        cancel: "Batal",
        deleted: {
          text: "Iya, verifikasi!",
          value: "deleted",
                }
      },
    })
    .then((value) => {
      switch (value) {
        case "deleted":
          var request = $.ajax({
            url: "<?= base_url(); ?>" + "kehadiran/validasi_foto",
            method: "POST",
            data: { id, tanggal },
            dataType: "json"
          });
          
          request.done(function( msg ) {
            if (msg.status == 'success') {
              swal(
                'Berhasil!',
                'Foto berhasil divalidasi.',
                'success'
              )
              .then((success_act) => {
                const status = `#keterangan-${id}`;
                const action = `#action-${id}`;
                $(status).html(`tidak sesuai`);
                $(action).html(``);                
              })
            } else {
              swal(
                'Failed!',
                'Foto gagal divalidasi.',
                'error'
              )
            }
          });
          
          request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          });
        break;
        default:
          swal("Foto batal divalidasi!");
      }
    })
  }

  function izinValidation(id) {
    swal({
      title: 'Apakah Permohonan izin sesuai?',
      text: "Validasi Permohonan izin pegawai",
      icon: 'warning',
      buttons: {
        cancel: "Batal",
        deleted: {
          text: "Iya, verifikasi!",
          value: "deleted",
        }
      },
    })
    .then((value) => {
      switch (value) {
        case "deleted":
          var request = $.ajax({
            url: "<?= base_url(); ?>" + "validasi_permohonan_izin/approve",
            method: "POST",
            data: { id },
            dataType: "json"
          });
          
          request.done(function( msg ) {
            if (msg.status == 'success') {
              swal(
                'Berhasil!',
                'Izin berhasil diberikan.',
                'success'
              )
              .then((success_act) => {
                const status = `#status-${id}`;
                const action = `#action-${id}`;
                $(status).html(`disetujui`);
                $(action).html(``);                
              })
            } else {
              swal(
                'Failed!',
                'Izin gagal diberikan',
                'error'
              )
            }
          });
          
          request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          });
        break;
        default:
          swal("Izin batal diberikan!");
      }
    })
  }

function izinCancelValidation(id) {
  swal({
    title: 'Apakah Permohonan izin mau ditolak?',
    text: "Validasi Permohonan izin pegawai",
    icon: 'warning',
    buttons: {
      cancel: "Batal",
      deleted: {
        text: "Iya, verifikasi!",
        value: "deleted",
      }
    },
  })
  .then((value) => {
    switch (value) {
      case "deleted":
        var request = $.ajax({
          url: "<?= base_url(); ?>" + "validasi_permohonan_izin/cancel",
          method: "POST",
          data: { id },
          dataType: "json"
        });
        
        request.done(function( msg ) {
          if (msg.status == 'success') {
            swal(
              'Berhasil!',
              'Izin berhasil ditolak.',
              'success'
            )
            .then((success_act) => {
              const status = `#status-${id}`;
              const action = `#action-${id}`;
              $(status).html(`ditolak`);
              $(action).html(``);                
            })
          } else {
            swal(
              'Failed!',
              'Izin gagal ditolak',
              'error'
            )
          }
        });
        
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
      break;
      default:
        swal("Izin batal ditolak!");
    }
  })
}
</script>
<script>
  $(document).ready(function() {
    $('#validasiTable').DataTable({
        dom: 'pft'
    });
  });
</script>
