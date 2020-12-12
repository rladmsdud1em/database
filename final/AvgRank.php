<?php
    $link = mysqli_connect('localhost', 'clean', 'dbp2018!', 'clean');

    $fin_info = '';
    $fin2_info = '';
    $fin3_info = '';
    $fin4_info = '';
    $fin5_info = '';

    $query1 = "SELECT city_sub, avg(s17) as 'avg17'
    from clean Group by city_sub ORDER BY avg17 DESC";
    $query2 = "SELECT city_sub, avg(s16) as 'avg16'
    from clean Group by city_sub ORDER BY avg16 DESC";
    $query3 = "SELECT city_sub, avg(s15) as 'avg15'
    from clean Group by city_sub ORDER BY avg15 DESC";
    $query4 = "SELECT city_sub, avg(s14) as 'avg14'
    from clean Group by city_sub ORDER BY avg14 DESC";
    $query5 = "SELECT city_sub, avg(s13) as 'avg13'
    from clean Group by city_sub ORDER BY avg13 DESC";

    $result1 = mysqli_query($link, $query1);
    $result2 = mysqli_query($link, $query2);
    $result3 = mysqli_query($link, $query3);
    $result4 = mysqli_query($link, $query4);
    $result5 = mysqli_query($link, $query5);

  while ($row = mysqli_fetch_array($result1)) {
      $fin_info .= '<tr>';
      $fin_info .= '<td>'.$row['city_sub'].'</td>';
      $fin_info .= '<td>'.$row['avg17'].'</td>';
      $fin_info .= '</tr>';
  }
      while ($row = mysqli_fetch_array($result2)) {
          $fin2_info .= '<tr>';
          $fin2_info .= '<td>'.$row['city_sub'].'</td>';
          $fin2_info .= '<td>'.$row['avg16'].'</td>';
          $fin2_info .= '</tr>';
      }
          while ($row = mysqli_fetch_array($result3)) {
              $fin3_info .= '<tr>';
              $fin3_info .= '<td>'.$row['city_sub'].'</td>';
              $fin3_info .= '<td>'.$row['avg15'].'</td>';
              $fin3_info .= '</tr>';
          }
              while ($row = mysqli_fetch_array($result4)) {
                  $fin4_info .= '<tr>';
                  $fin4_info .= '<td>'.$row['city_sub'].'</td>';
                  $fin4_info .= '<td>'.$row['avg14'].'</td>';
                  $fin4_info .= '</tr>';
              }
                  while ($row = mysqli_fetch_array($result5)) {
                      $fin5_info .= '<tr>';
                      $fin5_info .= '<td>'.$row['city_sub'].'</td>';
                      $fin5_info .= '<td>'.$row['avg13'].'</td>';
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
    <h2><a href="index.php">지역별 청렴도 측정 결과 시스템</a> | 우수 자치도 순위</h2>
    <h4>각 자치도 별 종합청렴도의 평균으로 순위를 측정하였습니다<h4>
    <table border="1" style="float:left;">
        <tr>
          <th>자치도 명</th>
            <th>17년도 평균 종합청렴도</th>
        </tr>
        <?=$fin_info?>
        </table>
        <table border="1" style="float:left;">
            <tr>
              <th>자치도 명</th>
                <th>16년도 평균 종합청렴도</th>
            </tr>
            <?=$fin2_info?>
            </table>
            <table border="1" style="float:left;">
                <tr>
                  <th>자치도 명</th>
                    <th>15년도 평균 종합청렴도</th>
                </tr>
                <?=$fin3_info?>
                </table>
                <table border="1" style="float:left;">
                    <tr>
                      <th>자치도 명</th>
                        <th>14년도 평균 종합청렴도</th>
                    </tr>
                    <?=$fin4_info?>
                    </table>
                    <table border="1" style="float:left;">
                        <tr>
                          <th>자치도 명</th>
                            <th>13년도 평균 종합청렴도</th>
                        </tr>
                        <?=$fin5_info?>
                        </table>
</body>
​
</html>
