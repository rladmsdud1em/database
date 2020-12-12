<?php
  $link = mysqli_connect('localhost', 'clean', 'dbp2018!', 'clean');
  $query = "select city_id, city, ROUND(s17-s16,3),s16,s17
from clean
order by s17-s16 DESC;";
  $result = mysqli_query($link, $query);
  $emp_info = '';
  while ($row = mysqli_fetch_array($result)) {
      $emp_info .= '<tr>';
      $emp_info .= '<td>'.$row['city_id'].'</td>';
      $emp_info .= '<td>'.$row['city'].'</td>';
      $emp_info .= '<td>'.$row['ROUND(s17-s16,3)'].'</td>';
      $emp_info .= '<td>'.$row['s16'].'</td>';
      $emp_info .= '<td>'.$row['s17'].'</td>';
      $emp_info .= '</tr>';
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>청결도확인 시스템</title>
</head>
<body>
    <h2><a href="index.php">청결도확인 시스템</a> | 16년도와 17년도 비교</h2>
    <table border="1">
        <tr>
            <th>city_id</th>
            <th>city</th>
            <th>17종합청렴도 - 16종합청렴도</th>
            <th>16종합청렴도</th>
            <th>17종합청렴도</th>
        </tr>
        <?= $emp_info ?>
    </table>
</body>
</html>
