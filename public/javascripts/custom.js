function do_login() {
    console.log('do_login')

    var username = $('#username');
    var password = $('#password');

    if (username.val() == '') {
        $.alert({
            title: 'Alerta',
            content: 'Introduceti numele de utilizator',
        });

        return;
    }

    if (password.val() == '') {
        $.alert({
            title: 'Alerta',
            content: 'Introduceti parola',
        });

        return;
    }

    $.ajax({
        type: 'POST',
        url: '/user/check_user/' + username.val() + '/' + password.val(),
        dataType: 'json',
        success: function (data) {
            console.log(data);

            if (data.status == 'ok') {
                window.location = '/login/';
            } else {
                $.alert({
                    title: 'Alerta',
                    content: data.message,
                    confirm: function () {
                        username.val('');
                        password.val('');
                    }
                });
            }
        }
    });
}

$(document).ready(function () {

    $("#datepicker, #datepicker_start, #datepicker_end").datepicker({
        dateFormat: "yy-mm-dd"
    });

    $('[data-toggle="tooltip"]').tooltip()

    $('a[href*="delete"]').on('click', function(e) {
        e.preventDefault();
        
        var href = $(this).attr('href');
        
        $.confirm({
            title: 'Confirmare',
            content: 'Esti sigur ca vrei sa stergi acest element?',
            confirm: function() {
                window.location = href;
            }
        });
    });

});