<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> GGV 관리 시스템 </title>
</head>
<style>
h1{color:#FF6347;;}
</style>
<body>
    <h1>GGV 관리 시스템</h1>
    <p><a href="movie_list.php">(1) 최신순 영화 목록 </a><br>
    <p>
    <p><a href="movie_order.php">(2) 낮은 가격순 영화 목록 </a><br>
    <p>
    <form action="movie_search.php" method="GET">
        (3) 영화 상세 조회 :
        <input type="text" name="number" placeholder="영화 고유번호 입력">
        <input type="submit" value="Search">
    </form>
    <p>
    <a href="movie_rating.php">(4) 등급별 영화 수 </a><br>
    <p>
    <p><a href="movie_customer.php">(5) 영화 최다 관람 고객 TOP10 </a><br>
    <p>
    <p><a href="movie_payment.php">(6) 최고 매출 날짜 </a><br>
</body>
</html>
