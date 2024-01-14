<?php
	$db = mysqli_connect("localhost", "smcha", "myftppwsd#00", "smcha");

	if (!$db) {
		die("데이터베이스 연결에 실패했습니다: " . mysqli_connect_error());
	}

	mysqli_set_charset($db, "utf8");
?>
