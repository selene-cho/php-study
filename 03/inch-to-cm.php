<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 300;
      height: 300;
      border: 1px solid black;
      border-collapse: collapse;
      text-align: center;
  
    }

    td, th {
      border: 1px solid black;
    }
  </style>

</head>
<body>
  <?php
    echo "<table>";
    echo "<tr>
            <th>inch</th>
            <th>cm</th>
          </tr>";
    
    for ($inch = 10; $inch <= 100; $inch+=10) {
        $cm = $inch * 2.54;
        echo "<tr>
                <td>$inch</td>
                <td>$cm</td>
              </tr>";
    }
    echo "</table>";
  ?>
</body>
</html>