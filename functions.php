<?php 
	include_once 'connection.php';

	if(isset($_POST['action']))
	{
		if($_POST['action'] == 'store'){
			store();
		}
		if($_POST['action'] == 'update'){
			update();
		}
	}

	if(isset($_GET['action']))
	{
		if($_GET['action'] == 'delete'){
			delete();
		}
	}


	function index(){
		$conn = connection();

		$users = [];

		$query = mysqli_query($conn, "SELECT * FROM users ORDER BY name");

		while($row = mysqli_fetch_assoc($query))
		{
			$users[] = $row;

		}

		return $users;

		mysqli_close($conn);
	}

	function get($id){
		$conn = connection();

		$user = [];

		$query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

		while($row = mysqli_fetch_assoc($query)){
			$user[] = $row;
		}

		return $user;

		mysqli_close($conn);
	}

	function store(){
		$conn = connection();

		$name = filter_input(INPUT_POST, 'name');

		$username = filter_input(INPUT_POST, 'username');

		$password =  md5(filter_input(INPUT_POST, 'password'));

		$query = "INSERT INTO users VALUES(default, '$name', '$username', '$password')";

		if(mysqli_query($conn, $query)){

			header("Location: index.php");

		} else {

			return 'Falha no cadastro!';

		}

		mysqli_close($conn);
	}

	function update(){
		$conn = connection();

		$id = filter_input(INPUT_POST, 'id');

		$name = filter_input(INPUT_POST, 'name');

		$username = filter_input(INPUT_POST, 'username');

		$password =  md5(filter_input(INPUT_POST, 'password'));

		$query = "UPDATE users SET name = '$name', username = '$username', password = '$password' WHERE id = $id";

		if(!mysqli_query($conn, $query)){
			return 'Falha na atualização do registro!';
		}

		header("Location: index.php");

		mysqli_close($conn);
	}

	function delete(){
		$conn = connection();

		$id = $_GET['id'];

		$query = "DELETE FROM users WHERE id = $id";

		if(!mysqli_query($conn, $query)) {
			return 'Falha na exclusão do registro!';
		}

		header("Location: index.php");

		mysqli_close($conn);
	}
?>