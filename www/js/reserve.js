$(function() {

    $('.js-reserve-form').submit(function(ev) {
        // submit the form AJAX
        var that = this;
        ev.preventDefault();
        $(this).find('input, select, textarea').prop('readonly', true);
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
            // on succes, replace submit with "clear form" button
            $(that).find('.response-message').html('Merci!');
            $(that).find('button[type=submit]').hide();
            $(that).find('button.js-clear-form').show();
        }).fail(function(jqXHR) {
            if (jqXHR.status == 400) {
                var response = JSON.parse(jqXHR.responseText);
                $(that).find('.response-message')
                       .addClass('error')
                       .html(response.message);
            } else {
                alert("Une erreur s'est produite.");
            }
            $(that).find('input, select, textarea').prop('readonly', false);
        }).always(function() {
            $(that).find('button[type=submit]').prop('disabled', false);
        });
    });

    $('.js-clear-form').click(function(ev) {
        // clears the form to allow more than one submission
        ev.preventDefault();
        var $form = $(this).closest('.js-reserve-form');
        $form.find('button[type=submit]').show();
        $form.find('input, select, textarea')
             .val('')
             .prop('readonly', false);
        $form.find('.response-message').html('');
        $(this).hide();
    });

});
