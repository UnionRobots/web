function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function subscribe(_email, _lang, _name, _message) {
    var data = {
        'action':'subscribe',
        'email': _email,
        'lang': _lang,
        'name': _name,
        'message': _message
    };
    jQuery.post('/ru/wp-admin/admin-ajax.php',
    data, function(response) {
        showStatusMessage(response);
    });
}
function sendOffer(_email, _name, _phone, _caption) {
    var data = {
        'action':'offer',
        'email': _email,
        'phone': _phone,
        'name': _name,
        'caption': _caption
    };
    jQuery.post('/ru/wp-admin/admin-ajax.php',
    data, function(response) {
        showStatusMessage(response);
    });
}

function thankyou() {
    $('form').hide();
    $('.thankyou').show();
}

function showStatusMessage(status) {
    $('.newsletter-help').addClass('hidden-xl-down').removeClass('active');
    switch (status) {
        case 'error0':
            $('.newsletter-text-error').removeClass('hidden-xl-down').addClass('active');
            console.log('error');
            break;
        case 'invalid0':
            $('.newsletter-email').addClass('is-invalid');
            console.log('invalid email');
            break;
        case 'Member Exists0':
            $('.newsletter-text-already-registered').removeClass('hidden-xl-down').addClass('active');
            console.log('already-has');
            thankyou();
            break;
        case 'success0':
            $('.newsletter-text-success').removeClass('hidden-xl-down').addClass('active');
            console.log('success');
            thankyou();
            break;
        default:
            console.log('write email');
    }
}

$('.subscribe-btn').on('click', function (e) {
    e.preventDefault();
    var form, email, lang, name, message;
    form = $(this).closest('form');
    lang = $(this).data('lang');
    email = form.find('.newsletter-email').val();
    name = form.find('.newsletter-name').val();
    message = form.find('.newsletter-message').val();

    $('.newsletter-email').removeClass('is-invalid');

    if (isEmail(email)) {
        subscribe(email, lang, name, message)
    }
    else {
        showStatusMessage('invalid0')
    }
});

$('.send-offer').on('click', function (e) {
    e.preventDefault();
    var form, email, name, phone, caption, data;
    form = $(this).closest('form');
    phone = form.find('.input-phone').val();
    email = form.find('.input-email');
    name = form.find('.input-name').val();
    data = form.find('input[name=workers]').val() + ' - ' + form.find('input[name=summ]').val();
    caption = form.find('.modal-title').text() + ' - ' + data;


    if (isEmail(email.val())) {
        sendOffer(email.val(), name, phone, caption);
        $(this).closest('.modal').modal('hide');
        $('.modal-thankyou-offer').modal('show');
        $('#emailHelp').text('На этот адрес эл. почты мы отправим коммерческое предложение')
        email.removeClass('is-invalid');
    }
    else {
        // showStatusMessage('invalid0')
        email.addClass('is-invalid');
        $('#emailHelp').text('Введите корректный адрес почты')
    }


});
