<?php 

	// connect.php

	$mysqli = new mysqli('localhost', 'root', 'admiral315', 'back_up');
	if(!$mysqli) {
		echo mysqli_error();
	}
?>