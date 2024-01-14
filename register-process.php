<?php
    include "./inc/header.inc";
?>
<div id="content">
	<div>
        <?php
            include "./inc/config.inc";
            
            if (isset($_POST["submit"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = $_POST["password"];
				$birth = !empty($_POST["birth"]) ? $_POST["birth"] : "";
				$tel = !empty($_POST["tel"]) ? $_POST["tel"] : "";
				$address = !empty($_POST["address"]) ? $_POST["address"] : "";
				$info = !empty($_POST["info"]) ? $_POST["info"] : "";
                
                $query = "INSERT INTO user (name, email, password, birth, tel, address, info) VALUES ('$name', '$email', '$password', '$birth', '$tel', '$address', '$info')";
                
				$result = mysqli_query($db, $query);

                if ($result) {
                    header("Location: login.php");
                } else {
                    header("Location: register.php");
                }

                mysqli_close($db);
            }
        ?>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>