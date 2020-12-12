<?php
    $link = mysqli_connect('localhost', 'clean', 'dbp2018!', 'clean');

    $fin_info = '';
    $fin2_info = '';
    $fin3_info = '';
    $fin4_info = '';
    $fin5_info = '';

    $query1 = "SELECT city_id, city, s17
              from clean
              ORDER BY s17 DESC LIMIT 30";
    $query2 = "SELECT city_id, city, s16
              from clean
              ORDER BY s16 DESC LIMIT 30";
    $query3 = "SELECT city_id, city, s15
              from clean
              ORDER BY s15 DESC LIMIT 30";
    $query4 = "SELECT city_id, city, s14
              from clean
              ORDER BY s14 DESC LIMIT 30";
    $query5 = "SELECT city_id, city, s13
              from clean
              ORDER BY s13 DESC LIMIT 30";

    $result1 = mysqli_query($link, $query1);
    $result2 = mysqli_query($link, $query2);
    $result3 = mysqli_query($link, $query3);
    $result4 = mysqli_query($link, $query4);
    $result5 = mysqli_query($link, $query5);

  while ($row = mysqli_fetch_array($result1)) {
      $fin_info .= '<tr>';
      $fin_info .= '<td>'.$row['city_id'].'</td>';
      $fin_info .= '<td>'.$row['city'].'</td>';
      $fin_info .= '<td>'.$row['s17'].'</td>';
      $fin_info .= '</tr>';
  }
   while ($row = mysqli_fetch_array($result2)) {
       $fin2_info .= '<tr>';
       $fin2_info .= '<td>'.$row['city_id'].'</td>';
       $fin2_info .= '<td>'.$row['city'].'</td>';
       $fin2_info .= '<td>'.$row['s16'].'</td>';
       $fin2_info .= '</tr>';
   }
        while ($row = mysqli_fetch_array($result3)) {
            $fin3_info .= '<tr>';
            $fin3_info .= '<td>'.$row['city_id'].'</td>';
            $fin3_info .= '<td>'.$row['city'].'</td>';
            $fin3_info .= '<td>'.$row['s15'].'</td>';
            $fin3_info .= '</tr>';
        }
             while ($row = mysqli_fetch_array($result4)) {
                 $fin4_info .= '<tr>';
                 $fin4_info .= '<td>'.$row['city_id'].'</td>';
                 $fin4_info .= '<td>'.$row['city'].'</td>';
                 $fin4_info .= '<td>'.$row['s14'].'</td>';
                 $fin4_info .= '</tr>';
             }
                  while ($row = mysqli_fetch_array($result5)) {
                      $fin5_info .= '<tr>';
                      $fin5_info .= '<td>'.$row['city_id'].'</td>';
                      $fin5_info .= '<td>'.$row['city'].'</td>';
                      $fin5_info .= '<td>'.$row['s13'].'</td>';
                      $fin5_info .= '</tr>';
                  }
?>
​
<!DOCTYPE html>
<html>
​
<head>
    <meta charset="utf-8">
    <title>지역별 청렴도 측정 결과 시스템</title>
</head>
​<style>
th {
    background-color: #bbdefb;
  }
  td {
    background-color: #e3f2fd;
  }
</style>
<body>
    <h2><a href="index.php">지역별 청렴도 측정 결과 시스템</a> | 전체 상위 지역</h2>
    <h4>s = 종합 청렴도 / e = 외부 청렴도 / i = 내부 청렴도<h4>
    <table border="1" style="float:left;">
        <tr><th colspan="3">17년도</th></tr>
        <tr>
            <th>city_id</th>
            <th>city</th>
            <th>s17</th>
        </tr>
        <?=$fin_info?>
        </table>
    <table border="1" style="float:left;">
         <tr><th colspan="3">16년도</th></tr>
         <tr>
                <th>city_id</th>
                <th>city</th>
                <th>s16</th>
            </tr>
        <?=$fin2_info?>
    </table>
    <table border="1" style="float:left;">
        <tr><th colspan="3">15년도</th></tr>
        <tr>
            <th>city_id</th>
            <th>city</th>
            <th>s15</th>
        </tr>
        <?=$fin3_info?>
        </table>
    <table border="1" style="float:left;">
           <tr><th colspan="3">14년도</th></tr>
            <tr>
                <th>city_id</th>
                <th>city</th>
                <th>s14</th>
            </tr>
        <?=$fin4_info?>
    </table>
    <table border="1" style="float:left;">
        <tr><th colspan="3">13년도</th></tr>
        <tr>
            <th>city_id</th>
            <th>city</th>
            <th>s13</th>
        </tr>
        <?=$fin5_info?>
        </table>
</body>
​
</html>
