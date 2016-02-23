$(function() {

    $('.reserve-form').submit(function(ev) {
        var that = this;
        ev.preventDefault();
        $(this).find('input select textarea').attr('readonly', true);
        $(this).find('button[type=submit]').prop('disabled', true);
        $(that).find('.response-message')
               .removeClass('error')
               .html('<img src="images/loading.gif" alt="Chargement"/>');
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            dataType: 'json',
            data: $(this).serialize()
        }).done(function() {
            $(that).find('.response-message').html('Merci!');
        }).fail(function(jqXHR) {
            if (jqXHR.status == 400) {
                var response = JSON.parse(jqXHR.responseText);
                $(that).find('.response-message')
                       .addClass('error')
                       .html(response.message);
            } else {
                alert("Une erreur s'est produite.");
            }
        }).always(function() {
            $(that).find('input select textarea').attr('readonly', false);
            $(that).find('button[type=submit]').prop('disabled', false);
        });
    });

});
