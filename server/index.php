<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="container">
            <div class="page-header">
                <h1>Formulario</h1>
                <p class="lead">Play ground BDD</p>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <h3>Cadastro</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-8">
                                <input type="text" id="nome" class="form-control" name="nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="endereco" class="col-sm-2 control-label">Endereço:</label>
                            <div class="col-sm-8">
                                <input type="text" id="endereco" class="form-control" name="endereco">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                            <div class="col-sm-8">
                                <input type="text" id="telefone" class="form-control" name="telefone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="text" id="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="cadastrar" class="btn btn-default">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                    <div class="alert alert-success" role="alert" style="display: none" id="success"></div>  
                    <div class="alert alert-danger" role="alert" style="display: none" id="error"></div>  
                </div>
            </div>
        </div>
        <script src="js/form.js"></script>
    </body>
</html>
