<html>
<head>
	<script src="js/jquery.min.js"></script>
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
		}
	});

	if (!erro) {
		setTimeout(function () { 
			$('#success').text('Cadastro realizado com sucesso');
		}, 2000);
	} 
});
</script>
</body>
</html>