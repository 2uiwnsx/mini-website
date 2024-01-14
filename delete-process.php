<?php
    include "./inc/header.inc";
?>
<div id="content">
    <div>
        <?php
            include "./inc/config.inc";
            
            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                
                $query = "DELETE FROM user WHERE email = '{$email}' AND password = '{$password}'";
				
                $result = mysqli_query($db, $query);

                if ($result) {
                    header("Location: logout.php");
                } else {
                    header("Location: delete.php");
                }

                mysqli_close($db);
            }
        ?>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>