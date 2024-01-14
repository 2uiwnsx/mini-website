<?php
    include "./inc/session.inc";
    include "./inc/header.inc";
?>
<div id="content" style="min-height: 600px; align-items: start">
	<div id="view">
		<?php
			include "./inc/config.inc";
			
			$query = "SELECT * FROM user";
			
			$result = mysqli_query($db, $query);
			
			echo "<table>";
			echo <<< EOD
			<th>이름</th>
			<th>이메일</th>
			<th>비밀번호</th>
			<th>생년월일</th>
			<th>전화번호</th>
			<th>주소</th>
			<th>자기소개</th>
EOD;
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>{$row['name']}</td>";
				echo "<td>{$row['email']}</td>";
				echo "<td>{$row['password']}</td>";
				echo "<td>{$row['birth']}</td>";
				echo "<td>{$row['tel']}</td>";
				echo "<td>{$row['address']}</td>";
				echo "<td>{$row['info']}</td>";
				echo "</tr>";
			}
			echo "</table>";
			
			mysqli_close($db);
		?>
	</div>
</div>
<?php
    include "./inc/footer.inc";
?>