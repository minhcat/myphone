$(document).ready(function(){
    //Select2
    $('.select2').select2()
    $('.select2-nosearch').select2({
      minimumResultsForSearch: -1
    })

    //Date picker
    $('#startDateInput').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    })
    $('#endDateInput').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    })

    //Date range picker
    $('#reservation').daterangepicker()

    //Reset form log
    $('.reset').on('click', function() {
      $('#startDateInput').datepicker('setDate', null);
      $('#endDateInput').datepicker('setDate', null);
      $('#typeInput').val('').trigger('change')
      $('#accountInput').val('').trigger('change')
    })
})