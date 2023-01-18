<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
.close { margin:20px 0 0 120px; cursor:pointer; }
</style>
</head>
<body>
   <h3>아이디 중복체크</h3>
   <div>
<?php
   $id = $_GET["id"]; // 입력시 오류체크를 되게 해놓았기 때문에, null이 넘어올리 없어서 isset 체크 안함.

   if (!$id) {
      echo("아이디를 입력해주세요!");
   }
   else {
      $con = mysqli_connect("localhost", "user", "12345", "sample");
      $sql = "select * from member where id='$id'"; // 사용자가 입력한 id 있으면 가져와
      $result = mysqli_query($con, $sql);
      $num_record = mysqli_num_rows($result); // 결과 넘어온 id 있으면 1 없으면 0 (record 갯수 셈)
      
      if ($num_record) {
         echo $id." 아이디는 중복됩니다.<br>";
         echo "다른 아이디를 사용해주세요!<br>";
      }
      else {
         echo $id." 아이디는 사용 가능합니다.<br>";
      }
      mysqli_close($con);
   }
?>
   </div>
   <div class="close">
      <button type="button" onclick="javascript:self.close()">창 닫기</button>
   </div>
</body>
</html>

