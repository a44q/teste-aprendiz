<!DOCTYPE html>
<html>
<head>
	<title>Adicionar usuário</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section id="store-user">
		<form action="functions.php" method="POST">
			<fieldset>
				<legend>Adicionar usuário</legend>

				<label for="name">Nome: </label>
				<input type="text" id="name" name="name">

				<label for="username">Usuário: </label>
				<input type="text" id="username" name="username">

				<label for="password">Senha: </label>
				<input type="password" id="password" name="password">

				<input type="hidden" name="action" value="store">

				<button type="submit">Adicionar</button>
				<a href="index.php" title="Cancelar">Cancelar</a>
			</fieldset>
		</form>
	</section>
</body>
</html>