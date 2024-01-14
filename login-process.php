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
                
                $query = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";
				
				$result = mysqli_query($db, $query);
				
                $user_info = mysqli_fetch_array($result);
                
                if (isset($user_info["email"])) {
                    session_start();
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["name"] = $user_info["name"];
                    header("Location: index.php");
                } else {
                    header("Location: login.php");
                }

                mysqli_close($db);
            }
        ?>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>