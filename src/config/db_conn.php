<?php
	require 'constants.php';

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$conn->set_charset("utf8");

	if($conn->connect_error){
		die('Database error:' . $conn->connect_error);
	}

	function mq($sql)
	{
		global $conn;
		return $conn->query($sql);
	}
