<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>지역별 청렴도 측정 결과 시스템</title>
</head>

<body>
    <h1>지역별 청렴도 측정 결과 시스템</h1>
    <h3>청렴도 측정제도가 국제적으로 인정받아서 2012년 UN대상을 받았다<br>
        외부 청렴도 : 공공기관과 업무경험이 있는 국민이 평가<br>
        내부 청렴도 : 공직자가 평가<br>
    </h3>
    <a href="detail.php">청렴도 측정에 대한 더 자세한 정보</a><br>


    <a href="listAll.php">(1) 전체 지역의 청렴도 결과 목록</a><br>
    <form action="selectRank.php" method="GET">
        (2) 검색 지역의 청렴도 조회 <br>
        <input type="text" name="city" placeholder="00도 00시/군">
        <input type="submit" value="Search">
    </form>
    <a href="TotalUpperArea.php">(3) 시군구별 청렴도 우수지역</a><br>
    <a href="TotalLowerArea.php">(4) 시군구별 청렴도 하위지역</a><br>
    <a href="AvgRank.php">(5) 우수 자치도별 순위 </a><br>


    <form action="search.php" method="POST">
        (6) 입력 점수보다 청렴도가 높은 지역 검색</a><br>
        <label>emp_no:</label>
        <input type="text" name="inputvalue" placeholder="점수를 입력하시오."><br>
        <input type="submit" value="Search">
    </form>

    <a href="compare.php">(7) 전년도와 비교하여 청렴도가 높아진 지역</a><br>



</body>

</html>
