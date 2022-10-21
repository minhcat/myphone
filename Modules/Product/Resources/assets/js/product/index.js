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

    //Modal
    $('.btn-delete').click(function() {
        let url = $(this).data('url')
        $('#modal-delete form').attr('action', url)
    })
    $('.btn-restore').click(function() {
        let url = $(this).data('url')
        $('#modal-restore form').attr('action', url)
    })
    $('.btn-ban').click(function() {
        let url = $(this).data('url')
        $('#modal-ban form').attr('action', url)
    })
    $('.btn-show').click(function() {
        // set url
        let url = $(this).data('url')
        $('#modal-show form').attr('action', url)

        // set data is_show
        let value = $(this).data('value')
        $('#modal-show input#show').val(value)
        if (value == '0') {
            $('#modal-show h4.modal-title').text('Hide Product')
        } else {
            $('#modal-show h4.modal-title').text('Show Product')
        }
    })
    $('.btn-lock').click(function() {
        // set url
        let url = $(this).data('url')
        $('#modal-lock form').attr('action', url)

        // set data is_lock
        let value = $(this).data('value')
        $('#modal-lock input#lock').val(value)
        if (value == '0') {
            $('#modal-lock h4.modal-title').text('Unlock Product')
        } else {
            $('#modal-lock h4.modal-title').text('Lock Product')
        }
    })

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
    })
})