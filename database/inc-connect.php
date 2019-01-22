<?php
	
	$conn = new mysqli('localhost', 'root', '', 'projeto_crud_php');

	if ($conn->connect_errno) {
		die("Erro connect database ( ".$conn->connect_errno." )".$conn->connect_error);
	}
	
?>