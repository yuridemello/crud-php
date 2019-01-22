<?php

	require('inc-connect.php');

	$query = $conn->query("SELECT * FROM contacts");
	$results = $query->fetch_all(MYSQLI_ASSOC);

?>