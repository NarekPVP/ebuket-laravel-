var locale = $('html').attr('lang');

// Регистрация для простого пользователя
$(document).on('submit', '#register-form-user', function (e){
    e.preventDefault();
    sendAjaxAuth($(this).attr('action'), $(this).serialize(), 'register-form-user', "/"+locale+"/home");
})
// Авторизация для всех
$(document).on('submit', '#login-form', function (e){
    e.preventDefault();
    sendAjaxAuth($(this).attr('action'), $(this).serialize(), 'login-form', '/'+locale);
})
// Конец регистрации магазина
$(document).on('submit', '#register-shop-end', function (e){
    e.preventDefault();
    sendAjaxAuth($(this).attr('action'), $(this).serialize(), 'login-form', "/"+locale+"/home");
})
// Восстановления пароля
$(document).on('submit', '#form-reset', function (e){
    e.preventDefault();
    sendAjaxAuth($(this).attr('action'), $(this).serialize(), 'form-reset', 'none');
})
// Конструктор ajax
function  sendAjaxAuth (action, data, el, link, step = null)
{
    $('#' + el + ' .errors-message').html('');

    $.ajax({
        url: action,
        type: 'POST',
        dataType: 'JSON',
        data: data,    // <-- Added data property
        success: function(data) {
            if(link != 'none')
                location = link;

            if(step){
                $('.step-' + step).addClass('active');
            }

            $('#' + el + ' .success-message').html('Ссылка для восстановления пароля отправлена на Ваш электронный адрес');
        },
        error: function(data) {
            if(step)
                alert('Error!');
            else {
                var newData = jQuery.parseJSON(data.responseText);
                console.log(data);
                $.each(newData.errors, function (index, value) {
                    console.log(value)
                    $('#' + el + ' .errors-message').append(value[0] + '<br>');
                })
            }
        }
    });
}

$(document).on('input', '.flower-list', function (e) {
   e.preventDefault();

    $.ajax({
        url: '/'+locale+'/price/get/f/name?f='+$(this).val(),
        type: 'GET',
        dataType: 'JSON',
        success: function(data) {
            console.log(data);
            $('.f-list').html(data.html);
        },
        error: function(data) {
            console.log(data);
        }
    });
});

$(document).on('click', '.set-flower-name', function (){
    $('.flower-list').val($(this).attr('data-title'));
})
