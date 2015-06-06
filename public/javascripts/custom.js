function do_login() {
    console.log('do_login')
    
    var username = $('#username');
    var password = $('#password');
    
    if (username.val() == '') {
        $.alert({
           title: 'Alert',
           content: 'Username field can\'t be empty',
        });
        
        return;
    }
    
    if (password.val() == '') {
        $.alert({
           title: 'Alert',
           content: 'Password field can\'t be empty',
        });
        
        return;
    }
    
    $.ajax({
        type: 'POST',
        url: '/user/check_user/' + username.val() + '/' + password.val(),
        dataType: 'json',
        success: function(data) {
            console.log(data);
            
            if (data.status == 'ok') {
                window.location = '/login/';
            } else {
                $.alert({
                    title: 'Alert',
                    content: data.message,
                    confirm: function() {
                        username.val('');
                        password.val('');
                    }
                });
            }
        }
    });
}