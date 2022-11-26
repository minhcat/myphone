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
            $('#modal-show h4.modal-title').text('Hide Brand')
        } else {
            $('#modal-show h4.modal-title').text('Show Brand')
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
            $('#modal-lock h4.modal-title').text('Unlock Brand')
        } else {
            $('#modal-lock h4.modal-title').text('Lock Brand')
        }
    })

    //Reset form search
    $('.reset').on('click', function() {
        $('#nameInput').val('');
        $('#startDateInput').datepicker('setDate', null);
        $('#endDateInput').datepicker('setDate', null);
        $('#brandInput').val('').trigger('change');
        $('#categoryInput').val('').trigger('change');
        $('#showInput').val('').trigger('change');
        $('#lockInput').val('').trigger('change');
        $('#createdByInput').val('').trigger('change');
        $('#trashSelect').val('false').trigger('change');
    })
})