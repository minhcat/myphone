$(document).ready(function () {
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
    //IMask
    IMask(document.getElementById('regularPriceInput'), {mask: Number, thousandsSeparator: ','})
    IMask(document.getElementById('salePriceInput'), {mask: Number, thousandsSeparator: ','})

    //CKEditor
    CKEDITOR.replace('descriptionInput')
})