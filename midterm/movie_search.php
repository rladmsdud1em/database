<?php
    $link = mysqli_connect('localhost', 'root', 'k5669203', 'sakila');

    $number = $_GET['number'];

    $query = "
    SELECT DISTINCT f.film_id, f.title, f.description, f.release_year, f.language_id, f.rating, c.category_id, a.actor_id
    FROM film f
    INNER JOIN film_category c
        ON c.film_id = f.film_id
    INNER JOIN film_actor a
        ON a.film_id = f.film_id
    WHERE f.film_id = ".$number;


    $article = '';
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $article .= '<tr><td>';
        $article .= $row['film_id'];
        $article .= '</td><td>';
        $article .= $row['title'];
        $article .= '</td><td>';
        $article .= $row['description'];
        $article .= '</td><td>';
        $article .= $row['release_year'];
        $article .= '</td><td>';
        $article .= $row['language_id'];
        $article .= '</td><td>';
        $article .= $row['rating'];
        $article .= '</td><td>';
        $article .= $row['category_id'];
        $article .= '</td><td>';
        $article .= $row['actor_id'];
        $article .= '</td><td>';
    }

    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> GGV 관리 시스템 </title>
    <body>
        <h2><a href="index.php">GGV 관리 시스템</a> | 영화 상세 조회 </h2>
        <table>
            <tr style="background-color:#FFA074;">
                <th>영화 고유번호</th>
                <th>영화 제목</th>
                <th>영화 설명</th>
                <th>개봉 날짜</th>
                <th>언어</th>
                <th>등급</th>
                <th>카테고리</th>
                <th>배우 고유번호</th>
            </tr>
            <?= $article ?>
        </table>
    </body>
</head>
</html>
