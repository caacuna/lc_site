$(function () {

    var alert = $('#registration-alert'),
        alert_icon = $('#registration-alert-icon'),
        alert_message = $('#registration-alert-message'),
        alert_close = $('#registration-alert-close');

    // Para solo esconder en vez de remover los mensajes de alerta
    alert_close.on("click", function () {
        $(this).closest("." + $(this).attr("data-dismiss")).hide();
        return false;
    });

    // Envio registro
    $("#registration-form").submit(function (event) {
        event.preventDefault();

        var $form = $(this),
            token = $form.find("input[name='_token']").val(),
            email = $('#InputEmail').val(),
            url = 'registrations';

        $.post(url, {_token: token, email: email}).done(function (r) {

            if (r.success) {
                $('#InputEmail').val('');
                alert.attr('class', 'alert alert-success alert-dismissible');
                alert_icon.attr('class', 'glyphicon glyphicon-ok-sign');
            } else {
                alert.attr('class', 'alert alert-danger alert-dismissible');
                alert_icon.attr('class', 'glyphicon glyphicon-exclamation-sign');
            }

            alert_message.text(r.message);
            alert.show();
        });

    });

});
