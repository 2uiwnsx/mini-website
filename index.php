<?php
    include "./inc/header.inc";
?>
<div id="content">
	<div id="index">
		<?php
			session_start();
			if (!isset($_SESSION["loggedIn"])) {
				header("Location:guest-index.php");
			} else {
				$name = $_SESSION["name"];
				echo "<h1>{$name}님 반갑습니다😊</h1>";
			}
		?>
		<img src="./image/index.jpg" id="beach">
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>