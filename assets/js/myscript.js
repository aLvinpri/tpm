$(function () {

  //Date and time picker

  // WO Input
  $('#reservationdatetime').datetimepicker({
    icons: { time: 'far fa-clock'},
    format: 'YYYY-MM-DD HH:mm:ss'
    });
  
  $('#reservationdatetime2').datetimepicker({
    icons: { time: 'far fa-clock'},
    format: 'YYYY-MM-DD HH:mm:ss'
    });

  $('#reservationdatetime3').datetimepicker({
    icons: { time: 'far fa-clock'},
    format: 'YYYY-MM-DD HH:mm:ss'
    });

    // WO Pengerjaan
  $('#reservationdatetime4').datetimepicker({
    format: 'YYYY-MM-DD'
    });

  $('#reservationdatetime5').datetimepicker({
    format: 'HH:mm:ss'
    });

  $('#reservationdatetime6').datetimepicker({
    format: 'HH:mm:ss'
    });

  $('#reservationdatetime7').datetimepicker({
    format: 'HH:mm:ss'
    });

  $('#reservationdatetime8').datetimepicker({
    format: 'HH:mm:ss'
    });
});
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function () {
  window.stepper = new Stepper(document.querySelector('.bs-stepper'))
});

// FlashData SweetAlert2
const flashData = $('.flash-data').data('flashdata');

if(flashData){
  Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: flashData
  })
};