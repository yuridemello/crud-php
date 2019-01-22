<?php
	require('inc-connect.php');

	$id = $_GET['id'] ?? null;

	$query = $conn->prepare("DELETE FROM contacts WHERE id=?");
	$query->bind_param('i', $id);
	$query->execute();

	header("location: ../index.php?route=delete");
	die();
?>