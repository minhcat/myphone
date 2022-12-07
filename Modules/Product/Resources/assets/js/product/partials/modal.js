$(function () {
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
})