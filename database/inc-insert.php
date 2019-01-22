<?php

	require_once "inc-connect.php";

	$name = $_POST['name'] ?? null;
	$email = $_POST['email'] ?? null;
	$phone = $_POST['phone'] ?? null;
	$password = $_POST['password'] ?? null;

	var_dump($_POST);

	$stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, password) VALUES (?, ?, ?, ?);");
	$stmt->bind_param('ssss', $name, $email, $phone, $password);
	$stmt->execute();

	header("location: ../index.php");

?>