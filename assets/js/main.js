$(document).on("submit", "form.js-register", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);


    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $('input[type="password"]', _form).val()
    };
 
    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show()
        return false;
    } else if (dataObj.password.length < 8) {
        _error
            .text("Please use a password that is 8 characters or longer")
            .show()
        return false;
    }


    // Assuming the code gets this fare we can start the ajax process
    _error.hide();

    // ajax
    $.ajax({
        type: 'POST',
        url: '/php-login-system/ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        // Whatever data is...
        console.log(data);
        
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        }
    })
    .fail(function ajaxFailed(e) {
        // This failed
        console.log(e)
    })
    .always(function ajaxAlwaysDoThis(data) {
        // Always do
        console.log('Always');
    })
    
    // always let it return false!
    return false;
})