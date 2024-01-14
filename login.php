<?php
    session_start();
    if (!isset($_SESSION["loggedIn"])) {
        include "./inc/guest-header.inc";
    } else {
        include "./inc/header.inc";
    }
?>
<div id="content">
	<div id="login">
		<img src="./image/login.png" id="signin">
		<form method="POST" action="login-process.php" name="login">
			<h3>ID<input type="email" name="email" id="email" maxlength="20" size="35" placeholder=" email@example.com" required autofocus></h3>
			<h3>PW<input type="password" name="password" id="password" maxlength="10" size="35" placeholder=" ●●●●●●●●●●" required></h3>
			<input type="submit" name="submit" class="btn" value="로그인">&nbsp;&nbsp;
			<input type="reset" name="reset" class="btn" value="취소">
		</form>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>