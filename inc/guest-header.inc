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
						<li><a href="guest-index.php">Home</a></li>
						<li><a href="register.php">회원가입</a></li>
						<li><a href="login.php">로그인</a></li>
						<li><a href="guestbook.php">방명록</a></li>
					</ul>
				</nav>
			</div>