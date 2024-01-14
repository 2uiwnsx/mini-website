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
                
                $query = "UPDATE user SET name = '{$name}', password = '{$password}', birth = '{$birth}', tel = '{$tel}', address = '{$address}', info = '{$info}' WHERE email = '{$email}'";
                
				$result = mysqli_query($db, $query);

                if ($result) {
                    header("Location: logout.php");
                } else {
                    header("Location: update.php");
                }

                mysqli_close($db);
            }
        ?>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>