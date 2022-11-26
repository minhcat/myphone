$(function () {
    //Select2
    $('.select2-nosearch').select2({
      // minimumResultsForSearch: -1
      minimumResultsForSearch: 1
    })
    $('.select2').select2()

    //Date picker
    $('#startDateInput').datepicker({
      autoclose: true
    })
    $('#endDateInput').datepicker({
      autoclose: true
    })

    //CKEditor
    CKEDITOR.replace('descriptionInput')
})