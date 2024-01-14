<?php
    session_start();
    if (!isset($_SESSION["loggedIn"])) {
        include "./inc/guest-header.inc";
    } else {
        include "./inc/header.inc";
    }
?>
<div id="content">
	<div id="register">
		<img src="./image/register.png" id="welcome">
		<form method="POST" action="register-process.php" name="register">
			<table id="register-table">
				<tr>
					<td class="required"><h3>이름</h3></td>
					<td><input type="text" name="name" maxlength="5" size="35" placeholder=" 홍길동" required autofocus></td>
					<td class="optional"><h3>생년월일</h3></td>
					<td><input type="date" name="birth" class="etc"></td>
				</tr>
				<tr>
					<td class="required"><h3>이메일</h3></td>
					<td><input type="email" name="email" maxlength="20" size="35" placeholder=" email@example.com" required></td>
					<td class="optional"><h3>전화번호</h3></td>
					<td><input type="tel" name="tel" maxlength="13" size="35" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder=" 010-1234-5678"></td>
				</tr>
				<tr>
					<td class="required"><h3>비밀번호</h3></td>
					<td><input type="password" name="password" maxlength="10" size="35" placeholder=" ●●●●●●●●●●" required></td>
					<td class="optional"><h3>주소</h3></td>
					<td><input type="text" name="address" maxlength="40" size="35" placeholder=" 경기도 수원시 영통구 광교산로 154-42"></td>
				</tr>
				<tr>
					<td class="required"><h3>비밀번호 확인</h3></td>
					<td><input type="password" name="recheck" maxlength="10" size="35" placeholder=" ●●●●●●●●●●" required></td>
					<td class="optional"><h3>자기소개</h3></td>
					<td><input type="text" name="info" maxlength="50" size="35" placeholder=" 안녕하세요!"></td>
				</tr>
			</table>
			<input type="submit" name="submit" class="btn" value="가입">&nbsp&nbsp
			<input type="reset" name="reset" class="btn" value="초기화">
		</form>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>