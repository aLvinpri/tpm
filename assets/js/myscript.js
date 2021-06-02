$(function () {
  //Date and time picker
  $('#reservationdatetime').datetimepicker({
    icons: { time: 'far fa-clock'},
    format: 'YYYY-MM-DD HH:mm:ss'
    });
  
  //Date and time picker
  $('#reservationdatetime2').datetimepicker({
    icons: { time: 'far fa-clock'},
    format: 'YYYY-MM-DD HH:mm:ss'
    });

  //Date and time picker
  $('#reservationdatetime3').datetimepicker({
    icons: { time: 'far fa-clock'},
    format: 'YYYY-MM-DD HH:mm:ss'
    });

})
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function () {
  window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})