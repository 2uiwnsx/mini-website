<?php
    include "./inc/session.inc";
    include "./inc/header.inc";
?>
<div id="content" style="flex-direction: column;">
	<div id="search">
		<form method="POST" action="search.php" name="search">
            <img src="./image/search.png" id="find">
            <div id="item">
				<SELECT name="category" id="category">
					<option value="이름">이름</option>
					<option value="이메일">이메일</option>
					<option value="전화번호">전화번호</option>
				</SELECT>
				<input type="search" name="search" maxlength="20" size="35" placeholder=" 검색어를 입력하세요." required autofocus>
				<input type="submit" name="submit" class="btn" value="검색">
			</div>
		</form>
	</div>
    <?php
        if (isset($_POST["submit"])) {
            include "./inc/config.inc";

            if ($_POST["category"] == "이름") {
                $query = "SELECT * FROM user WHERE name LIKE '%{$_POST['search']}%'";
            } else if ($_POST["category"] == "이메일") {
                $query = "SELECT * FROM user WHERE email LIKE '%{$_POST['search']}%'";
            } else if ($_POST["category"] == "전화번호") {
                $query = "SELECT * FROM user WHERE tel LIKE '%{$_POST['search']}%'";
            }
            
            $result = mysqli_query($db, $query);

			echo <<< EOD
			<div id="search-result">
				<table>
					<th>이름</th>
					<th>이메일</th>
					<th>비밀번호</th>
					<th>생년월일</th>
					<th>전화번호</th>
					<th>주소</th>
					<th>자기소개</th>
EOD;
					while ($row = mysqli_fetch_array($result)) {        
					
						echo <<< EOD
						<tr>
							<td>{$row["name"]}</td>
							<td>{$row["email"]}</td>
							<td>{$row["password"]}</td>
							<td>{$row["birth"]}</td>
							<td>{$row["tel"]}</td>
							<td>{$row["address"]}</td>
							<td>{$row["info"]}</td>
						</tr>
EOD;
					}
			echo <<< EOD
				</table>
			</div>
EOD;
			
            mysqli_close($db);
        }
    ?>
</div>
<?php
    include "./inc/footer.inc";
?>