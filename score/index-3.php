<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<body>
   <h3>1) 성적 입력 하기</h3>
   <form action="insert.php" method='post' cellspacing="0">
      <table border="2">
         <tr>
            <td> 이름 : <input type="text" size="6" name="name">&nbsp;
                  PHP : <input type="text" size="3" name="sub1">&nbsp;
                  자바 : <input type="text" size="3" name="sub2">&nbsp;
                  파이썬 : <input type="text" size="3" name="sub3">&nbsp;
                  C : <input type="text" size="3" name="sub4">&nbsp;
                  DB : <input type="text" size="3" name="sub5">&nbsp;
                  자바스크립트 : <input type="text" size="3" name="sub6">&nbsp;
                  리액트 : <input type="text" size="3" name="sub7">&nbsp;
            </td>
            <td>
               <!-- submit 하면 insert.php에 입력 -->
               <input type="submit" value="입력하기">
            </td>
         </tr>
      </table>
   </form>
   <br>
   <h3>2) 성적 출력 하기</h3>  
   <!-- 제목 표시 시작 -->
   <table border="2" cellspacing="0">
      <tr>
         <th>번호</th>
         <th>이름</th>
         <th>PHP</th>
         <th>자바</th>
         <th>파이썬</th>
         <th>C</th>
         <th>DB</th>
         <th>자바스크립트</th>
         <th>리액트</th>
         <th>합계</th>
         <th>평균</th>
         <th>수정</th>
         <th>삭제</th>
      </tr>

      <?php
         include "dbconn.php"; // DB 접속
         $sql = "select * from score"; // score 에 있는 모든 테이블 가져와
         $result = mysqli_query($conn, $sql);
         $number = 1;
         while ($row = mysqli_fetch_assoc($result)) { // mysql에서 하나의 데이터 가져와서(fetch) associate 해
            $num = $row["num"];
            $name = $row["name"];
            $sub1 = $row["sub1"];
            $sub2 = $row["sub2"];
            $sub3 = $row["sub3"];
            $sub4 = $row["sub4"];
            $sub5 = $row["sub5"];
            $sub6 = $row["sub6"];
            $sub7 = $row["sub7"];
            $sum = $row["sum"];
            $avg = $row["avg"];
      ?>
      <!-- html -->
      <tr align='center'> 
      <form action="modify.php" method="post">
         <input type="hidden" name="num" value="<?=$num?>">
         <td><?=$number?></td>  <!-- html에서 php값 가져오려고 하는 거니까 -->
         <td><input type="text" size="6" name="name" value="<?=$name?>"></td>
         <td><input type="text" size="3" name="sub1" value="<?=$sub1?>"></td>
         <td><input type="text" size="3" name="sub2" value="<?=$sub2?>"></td>
         <td><input type="text" size="3" name="sub3" value="<?=$sub3?>"></td>
         <td><input type="text" size="3" name="sub4" value="<?=$sub4?>"></td>
         <td><input type="text" size="3" name="sub5" value="<?=$sub5?>"></td>
         <td><input type="text" size="3" name="sub6" value="<?=$sub6?>"></td>
         <td><input type="text" size="3" name="sub7" value="<?=$sub7?>"></td>
         <td><?=$sum?></td>
         <td><?=$avg?></td>
         <td>
            <button type="submit">수정</button>
         </td>
         </form>
         <td>
            <!-- 삭제할 record  = 파라미터 이름 값? ?? -->
            <button onClick="location.href='delete.php?num=<?=$num?>'">삭제</button>
         </td>
      </tr>
      <?php
            $number++;
         }
         mysqli_close($conn);
      ?>
   </table>
</body>

<!-- 수정버튼 만들기 / score 날리고 두과목 추가 sub6 sub7 추가 insert into 두과목 추가 ...  -->