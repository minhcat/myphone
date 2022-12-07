$(function () {
    //Select2
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
    $('#reservation').daterangepicker({
        autoUpdateInput: false,
        locale: {
            format: 'DD/MM/YYYY'
        }
    })
    $('#reservation').on('apply.daterangepicker', function(ev, picker) {
        if (!picker.startDate.isValid() || !picker.endDate.isValid()) {
            $(this).val('')
        } else {
            console.log($(this).data('daterangepicker'))
            $(this).data('daterangepicker').autoUpdateInput = true;
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        }
    });

    $('#reservation').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
    $('#reservation').on('show.daterangepicker', function(ev, picker) {
        console.log('show')
    });

    //Reset form search
    $('.reset').on('click', function() {
        $('#nameInput').val('')
        $('#startDateInput').datepicker('setDate', null);
        $('#endDateInput').datepicker('setDate', null);
        $('#brandInput').val('').trigger('change')
        $('#categoryInput').val('').trigger('change')
        $('#showInput').val('').trigger('change')
        $('#lockInput').val('').trigger('change')
        $('#createdByInput').val('').trigger('change')
        $('#reservation').val('');
        $('#trashSelect').bootstrapToggle('off')
    })
});