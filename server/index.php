<html>
    <head>
        <!-- jQuery min local -->
        <script src="js/jquery.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>Formulario</h1>

        <form>
            Nome: <input type="text" name="nome"><br>
            Endereço: <input type="text" name="endereco"><br>
            Telefone: <input type="text" name="telefone"><br>
            Email: <input type="text" name="email"><br>
            <button id="cadastrar">Cadastrar</button>
        </form>
        <h1 id="success"></h1>
        <script>
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
        </script>
    </body>
</html>
