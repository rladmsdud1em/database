<?php
  $link = mysqli_connect('localhost', 'clean', 'dbp2018!', 'clean');
  $inputvalue = mysqli_real_escape_string($link, $_POST['inputvalue']);
  $query = "select city_id, city, s17
from clean
where s17 > '{$_POST['inputvalue']}'
order by s17 DESC";
  $result = mysqli_query($link, $query);
  $city_info = '';
  $count = 0;
  while ($row = mysqli_fetch_array($result)) {
      $city_info .= '<tr>';
      $city_info .= '<td>'.$row['city_id'].'</td>';
      $city_info .= '<td>'.$row['city'].'</td>';
      $city_info .= '<td>'.$row['s17'].'</td>';
      $city_info .= '</tr>';
      $count += 1;
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>청결도확인 시스템</title>
</head>
<body>
    <h2><a href="index.php">청결도확인 시스템</a> | 종합청렴도가 입력점수를 넘는 구 검색</h2>
    <h4>결과 개수: <?= $count ?></h4>
    <table border="1">
        <tr>
            <th>city_id</th>
            <th>city</th>
            <th>17년도 종합청렴도</th>
        </tr>
        <?= $city_info ?>
    </table>
</body>
</html>
