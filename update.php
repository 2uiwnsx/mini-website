<?php
    include "./inc/session.inc";
    include "./inc/header.inc";
?>
<div id="content">
	<div id="update">
		<img src="./image/update.png" id="modify">
		<form method="POST" action="update-process.php" name="update">
			<h3>ID<input type="email" name="email" id="email" maxlength="20" size="35" placeholder=" email@example.com" required autofocus></h3>
			<h3>PW<input type="password" name="password" id="password" maxlength="10" size="35" placeholder=" ●●●●●●●●●●" required></h3>
			<input type="submit" name="submit" class="btn" value="수정">&nbsp;&nbsp;
			<input type="reset" name="reset" class="btn" value="초기화">
		</form>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>