<?php
  $link = mysqli_connect('localhost', 'root', 'k5669203', 'sakila');
  $query = "SELECT payment_date, COUNT(payment_id)  AS cnt, SUM(amount) AS salesNum
  FROM payment
  GROUP BY payment_date ORDER BY salesNum  DESC LIMIT 20";

  $result = mysqli_query($link, $query);
  $film_info = '';

  while($row = mysqli_fetch_array($result)) {
    $film_info .= '<tr>';
    $film_info .= '<td>'.$row['payment_date'].'</td>';
    $film_info .= '<td>'.$row['cnt'].'</td>';
    $film_info .= '<td>'.$row['salesNum'].'</td>';
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
    <h2><a href="index.php">GGV 관리 시스템</a> | 최고 매출 날짜</h2>
    <table border="1">
        <tr style="background-color:#FFA074;" >
            <th>날짜</th>
            <th>결제 수</th>
            <th>매출</th>

        </tr>
        <?= $film_info ?>

    </table>
</body>

</html>
