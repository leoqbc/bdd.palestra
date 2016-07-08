/* 
 * Javascript bem Noob para o formulário
 * 
 */
$('#cadastrar').click(function (event) {
    event.preventDefault();
    var erro;
    erro = false;
    $('input').each(function () {
        if ($(this).val() == '') {
            erro = true;
            return false;
        }
    });

    if (!erro) {
        setTimeout(function () {
            $('#success').text('Cadastro realizado com sucesso');
        }, 2000);
    }

    if (erro) {
        $('#error').text('Erro ao cadastrar');
    }
});


