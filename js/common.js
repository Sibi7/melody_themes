$(document).ready(function () {
    $(document).on('submit', '#callbackForm', function () {
        event.preventDefault();
        var form = new FormData($('#callbackForm')[0]);

        form.append('action', 'sendcallback');

        $.ajax({
            url: myajax.url,
            type: "POST",
            data: form,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#callbackForm')[0].reset();

                if (data.status == 'success') {
                    $('#modal5').hide();
                }
            }
        });
    });
});