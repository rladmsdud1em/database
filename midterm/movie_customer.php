<?php
  $link = mysqli_connect('localhost', 'root', 'k5669203', 'sakila');
  $query = "SELECT a.customer_id, a.cnt, b.first_name, b.last_name, b.email, b.last_update
    FROM(
    SELECT customer_id, count(*) cnt
    FROM rental
    GROUP BY customer_id
    ORDER BY cnt DESC
    LIMIT 10
    )a
    JOIN
    (SELECT*FROM customer)b
    ON a.customer_id=b.customer_id";

  $result = mysqli_query($link, $query);
  $film_info = '';


  while($row = mysqli_fetch_array($result)) {
    $film_info .= '<tr>';
    $film_info .= '<td>'.$row['customer_id'].'</td>';
    $film_info .= '<td>'.$row['cnt'].'</td>';
    $film_info .= '<td>'.$row['first_name'].'</td>';
    $film_info .= '<td>'.$row['last_name'].'</td>';
    $film_info .= '<td>'.$row['email'].'</td>';
    $film_info .= '<td>'.$row['last_update'].'</td>';
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
    <h2><a href="index.php">GGV 관리 시스템</a> | 영화 최다 관람 고객 TOP10</h2>
    <table border="1">
        <tr style="background-color:#FFA074;" >
            <th>고객 번호</th>
            <th>영화관람 수</th>
            <th>이름</th>
            <th>성</th>
            <th>이메일</th>
            <th>마지막 업데이트</th>
        </tr>
        <?= $film_info ?>

    </table>
</body>

</html>
