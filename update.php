<!DOCTYPE html>
<html>
<head>
	<title>Atualizar usuário</title>
	<link rel="stylesheet" href="css/style.css">

	<?php 
		include_once 'functions.php';

		$user = get($_GET['id']);
	?>
</head>
<body>
	<section id="update-user">
		<form action="functions.php" method="POST">
			<fieldset>
				<legend>Atualizar usuário</legend>

				<?php foreach($user as $u) : ?>
					<label for="name">Nome: </label>
					<input type="text" id="name" name="name" value="<?= $u['name'] ?>">

					<label for="username">Usuário: </label>
					<input type="text" id="username" name="username" value="<?= $u['username'] ?>">

					<label for="password">Senha: </label>
					<input type="password" id="password" name="password" value="<?= $u['password'] ?>">
				<?php endforeach; ?>

				<input type="hidden" name="action" value="update">

				<input type="hidden" name="id" value="<?= $_GET['id'] ?>">

				<button type="submit">Atualizar</button>

				<a href="index.php" title="Cancelar">Cancelar</a>
			</fieldset>
		</form>
	</section>
</body>
</html>