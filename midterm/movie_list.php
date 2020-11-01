<?php
  $link = mysqli_connect('localhost', 'root', 'k5669203', 'sakila');
  $query = "SELECT film_id, title, rental_rate, rental_duration, description
  FROM film
  ORDER BY film_id DESC LIMIT 50;";

  $result = mysqli_query($link, $query);
  $film_info = '';


  while($row = mysqli_fetch_array($result)) {
    $film_info .= '<tr>';
    $film_info .= '<td>'.$row['film_id'].'</td>';
    $film_info .= '<td>'.$row['title'].'</td>';
    $film_info .= '<td>'.$row['description'].'</td>';
    $film_info .= '<td>'.$row['rental_rate'].'</td>';
    $film_info .= '<td>'.$row['rental_duration'].'</td>';
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
    <h2><a href="index.php">GGV 관리 시스템</a> | 최신순 영화 목록</h2>
    <table border="1">
        <tr style="background-color:#FFA074;" >
            <th>영화 고유번호</th>
            <th>영화 제목</th>
            <th>영화 설명</th>
            <th>가격</th>
            <th>대여기간</th>
        </tr>
        <?= $film_info ?>

    </table>
</body>

</html>
