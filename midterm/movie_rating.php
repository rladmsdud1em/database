<?php
  $link = mysqli_connect('localhost', 'root', 'k5669203', 'sakila');
  $query = "SELECT rating, COUNT(rating) AS 'number'
  FROM film
  GROUP BY rating
  HAVING number > 0
  ORDER BY number DESC;";

  $result = mysqli_query($link, $query);
  $film_info = '';


  while($row = mysqli_fetch_array($result)) {
    $film_info .= '<tr>';
    $film_info .= '<td>'.$row['rating'].'</td>';
    $film_info .= '<td>'.$row['number'].'</td>';
    $film_info .= '</tr>';
  }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> GGV 관리 시스템 </title>
</head>

<body>
    <h2><a href="index.php">GGV 관리 시스템</a> | 등급별 영화 수</h2>
    <table>
      <td width="200">
        <tr style="background-color:#FFA074;">
            <th>등급명</th>
            <th>합</th>
        </tr>
      </td>
        <?= $film_info ?>

    </table>
</body>

</html>
