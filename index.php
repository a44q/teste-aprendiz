<!DOCTYPE html>
<html>
<head>
	<title>Teste Aprendiz em Backend</title>
	<link rel="stylesheet" href="css/style.css">

	<?php 
		include_once 'functions.php';
		$users = index();
	?>
</head>
<body>
	<a href="add.php" title="Add a new user">Adicionar usuário</a>

	<section id="users">
		<table cellspacing="5" border="1">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Usuário</th>
					<th>Senha</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user):  ?>
				<?php $id = $user['id']; ?>

					<tr>
						<td><?= $user['name'] ?></td>
						<td><?= $user['username'] ?></td>
						<td><?= $user['password'] ?></td>
						<td>
							<a href="update.php?id=<?= $id ?>">Editar</a>
							|
							<a href="functions.php?id=<?= $id ?>&action=delete" onclick="return confirm('Deseja realmente apagar o registro?')">Apagar</a>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</section>
</body>
</html>