<?php
		$conn = mysqli_connect("localhost", "root", "Date@2004", "pharmacy");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>