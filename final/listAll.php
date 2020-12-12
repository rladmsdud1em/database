<?php
    $link = mysqli_connect('localhost', 'clean', 'dbp2018!', 'clean');

    $query = "SELECT city_id, city, s13, s14, s15, s16, s17, e13, e14, e15, e16, e17, i13, i14, i15, i16, i17
              from clean;";
    $result = mysqli_query($link, $query);

    $emp_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row['city_id'].'</td>';
        $emp_info .= '<td>'.$row['city'].'</td>';
        $emp_info .= '<td>'.$row['s13'].'</td>';
        $emp_info .= '<td>'.$row['s14'].'</td>';
        $emp_info .= '<td>'.$row['s15'].'</td>';
        $emp_info .= '<td>'.$row['s16'].'</td>';
        $emp_info .= '<td>'.$row['s17'].'</td>';
        $emp_info .= '<td>'.$row['e13'].'</td>';
        $emp_info .= '<td>'.$row['e14'].'</td>';
        $emp_info .= '<td>'.$row['e15'].'</td>';
        $emp_info .= '<td>'.$row['e16'].'</td>';
        $emp_info .= '<td>'.$row['e17'].'</td>';
        $emp_info .= '<td>'.$row['i13'].'</td>';
        $emp_info .= '<td>'.$row['i14'].'</td>';
        $emp_info .= '<td>'.$row['i15'].'</td>';
        $emp_info .= '<td>'.$row['i16'].'</td>';
        $emp_info .= '<td>'.$row['i17'].'</td>';
        $emp_info .= '</tr>';
    }

    // mysqli_free_result($result);
    // mysqli_close($link);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>지역별 청렴도 측정 결과 시스템</title>
</head>

<body>
    <h2><a href="index.php">지역별 청렴도 측정 결과 시스템</a> | 전체 결과 목록</h2>
    <h4>s = 종합 청렴도 / e = 외부 청렴도 / i = 내부 청렴도<h4>
    <table border="1">
        <tr>
            <th>city_id</th>
            <th>city</th>
            <th>s13</th>
            <th>s14</th>
            <th>s15</th>
            <th>s16</th>
            <th>s17</th>
            <th>e13</th>
            <th>e14</th>
            <th>e15</th>
            <th>e16</th>
            <th>e17</th>
            <th>i13</th>
            <th>i14</th>
            <th>i15</th>
            <th>i16</th>
            <th>i17</th>
        </tr>
        <?=$emp_info?>
    </table>
</body>

</html>
