<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');

    if (mysqli_connect_errno()) {
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    }

    $number = $_GET['number'];

    $query = "
    SELECT e.emp_no, e.last_name, t.title, de.dept_name, s.salary, t.from_date, t.to_date 
    FROM employees e 
    INNER JOIN titles t 
        ON t.emp_no = e.emp_no 
    INNER JOIN salaries s 
        ON s.emp_no = e.emp_no 
    INNER JOIN dept_emp d 
        ON d.emp_no = e.emp_no
    INNER JOIN departments de 
        ON de.dept_no = d.dept_no
    WHERE e.emp_no = ".$number;

    $article = '';
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $article .= '<tr><td>';
        $article .= $row['emp_no'];
        $article .= '</td><td>';
        $article .= $row['last_name'];
        $article .= '</td><td>';
        $article .= $row['title'];
        $article .= '</td><td>';
        $article .= $row['dept_name'];
        $article .= '</td><td>';
        $article .= $row['salary'];
        $article .= '</td><td>';
        $article .= $row['from_date'];
        $article .= '</td><td>';
        $article .= $row['to_date'];
        $article .= '</td><td>';
    }
    
    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 직원 상세 조회 </title>
    <style>
    body {
        font-family: Consolas, monospace;
        font-fmaily:12px;
    }
    table {
        width: 100%;
    }
    th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
    }
    td {
        text-align: center;
    }
    </style>
    <body>
        <h2><a href="index.php"> 직원 관리 시스템 </a> | 직원 상세 조회 </h2>
        <table>
            <tr>
                <th>emp_no</th>
                <th>last_name</th>
                <th>title</th>
                <th>dept_name</th>
                <th>salary</th>
                <th>from_date</th>
                <th>to_date</th>
            </tr>
            <?= $article ?>
        </table>
    </body>
</head>
</html>
