<?php
    include "./inc/header.inc";
?>
<div id="content">
    <div id="update-process">
		<img src="./image/update-process.png" id="correct">
        <?php
            include "./inc/config.inc";
            
            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                
                $query = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";
				
                $result = mysqli_query($db, $query);
				
                $row = mysqli_fetch_array($result);
                
                if ($row) {
        ?>
                    <form method="POST" action="update-process-complete.php" name="update">
                        <table class="update-table">
                            <tr>
                                <td class="required"><h3>이름</h3></td>
                                <td><input type="text" name="name" maxlength="5" size="35" value="<?php echo $row["name"];?>" required autofocus></td>
                                <td class="optional"><h3>생년월일</h3></td>
                                <td><input type="date" name="birth" class="etc" value="<?php echo $row["birth"];?>"></td>
                            </tr>
                            <tr>
                                <td class="required"><h3>이메일</h3></td>
                                <td><input type="email" name="email" maxlength="20" size="35" value="<?php echo $row["email"];?>" readonly></td>
								<td class="optional"><h3>전화번호</h3></td>
								<td><input type="tel" name="tel" maxlength="13" size="35" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" value="<?php echo $row["tel"];?>"></td>
							</tr>
                            <tr>
                                <td class="required"><h3>비밀번호</h3></td>
                                <td><input type="password" name="password" maxlength="10" size="35" value="<?php echo $row["password"];?>" required></td>
                                <td class="optional"><h3>주소</h3></td>
                                <td><input type="text" name="address" maxlength="40" size="35" value="<?php echo $row["address"];?>"></td>
                            </tr>
                            <tr>
                                <td class="required"><h3>비밀번호 확인</h3></td>
                                <td><input type="password" name="recheck" maxlength="10" size="35" required></td>
                                <td class="optional"><h3>자기소개</h3></td>
                                <td><input type="text" name="info" maxlength="50" size="35" value="<?php echo $row["info"];?>"></td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" class="btn" value="수정">&nbsp&nbsp
						<input type="reset" name="reset" class="btn" value="취소" onclick="location.href='update.php';">
                    </form>
        <?php
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