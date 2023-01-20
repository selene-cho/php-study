<?php
	$num = $_GET["num"]; // GET으로 수정하는 글 가져옴

	$name = $_POST["name"];
	$pass = $_POST["post"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$subject = htmlspecialchars($subject, ENT_QUOTES); // 제목 HTML 특수문자 변환
	$content = htmlspecialchars($content, ENT_QUOTES); // 내용 HTML 특수문자 변환
	$regist_day = date("Y-m-d (H:i)");

	$con = mysqli_connect("localhost", "user", "12345", "sample"); // DB 연결

	$sql = "update into freeboard set '$name', '$pass', '$subject', '$content', '$regist_day' where num=$num"; // 명령어: update

	mysqli_query($con, $sql); // sql에 저장된 명령 실행
	mysqli_close($con); // DB 연결 끊기

	echo "
		<script>
		location.href = 'list.php';
		</script>
	";
?>