<?php
	require_once 'inc-connect.php';

	$id = $_GET['id'] ?? null;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$name = $_POST['name'] ?? null;
		$email = $_POST['email'] ?? null;
		$phone = $_POST['phone'] ?? null;
		$password = $_POST['password'] ?? null;

		$stmt = $conn->prepare("UPDATE contacts SET name=?, email=?, phone=?, password=? WHERE id=?;");
		$stmt->bind_param('ssssi', $name, $email, $phone, $password, $id);
		$stmt->execute();
		header("location: ../index.php");
		die();
	}

	$stmt = $conn->prepare("SELECT * FROM contacts WHERE id =?");
	$stmt->bind_param('i', $id);
	$stmt->execute();

	$results = $stmt->get_result();
	$user = $results->fetch_assoc();

?>