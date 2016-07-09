/* 
 * Javascript bem Noob para o formulário
 * 
 */
function hideAlerts() {
    $('#success').hide();
    $('#error').hide();
}

$('#cadastrar').click(function (event) {
    event.preventDefault();
    var erro;
    var delay = 2000;
    erro = false;
    $('input').each(function () {
        if ($(this).val() == '') {
            erro = true;
            return false;
        }
    });

    if (!erro) {
        setTimeout(function () {
            hideAlerts();
            $('#success').text('Cadastro realizado com sucesso').show();
        }, delay);
    }

    if (erro) {
        hideAlerts();
        $('#error').text('Erro ao cadastrar').show();
    }
});