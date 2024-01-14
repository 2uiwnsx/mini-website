<!DOCTYPE html>
<html>
	<head>
		<title>Sumin's Mini Website</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css"/>
		<link rel="stylesheet" type="text/css" href="./css/menu.css"/>
		<link rel="icon" type="image/png" href="./image/favicon.png"/>
		<script>
            function updatemenu() {
                if (document.getElementById("responsive-menu").checked == true) {
                    document.getElementById("menu").style.borderBottomRightRadius = "0";
                    document.getElementById("menu").style.borderBottomLeftRadius = "0";
                } else {
                    document.getElementById("menu").style.borderRadius = "15px";
                }
            }
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1>Sumin's Mini Website</h1>
			</div>
			<div id="navigation">
				<nav id="menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="view.php">회원목록</a></li>
						<li><a href="search.php">회원검색</a></li>
						<li><a href="update.php">회원수정</a></li>
						<li><a href="logout.php">로그아웃</a></li>
                        <li><a href="delete.php">회원탈퇴</a></li>
						<li><a href="guestbook.php">방명록</a></li>
					</ul>
				</nav>
			</div>