<?php 
	
	function connection(){
		$conn = mysqli_connect('localhost', 'root', '', 'devlex');

		if(!$conn) die('Error: '.mysqli_connect_error()); 

		return $conn;
	}

?>