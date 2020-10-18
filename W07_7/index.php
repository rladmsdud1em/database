<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템</title>
</head>
<body>
    <h1>직원 관리 시스템</h1>
    <p><a href="emp_select.php">(1) 전체 직원 정보 조회 </a><br>
    <p>
    <a href="emp_insert.php">(2) 신규 직원 등록 </a><br>
    <p>
    <form action="emp_update.php" method="POST">
        (3) 직원 정보 수정 :
        <input type="text" name="emp_no" placeholder="사원번호를 입력하세요.">
        <input type="submit" value="Update">
    </form>
    <p>
    <form action="emp_delete.php" method="POST">
        (4) 직원 정보 삭제 :
        <input type="text" name="emp_no" placeholder="사원번호를 입력하세요.">
        <input type="submit" value="Delete">
    </form>
    <p>
    </form>
    <form action="emp_search.php" method="GET">
        (5) 직원 상세 조회: 
        <input type="text" name="number" placeholder="사원번호를 입력하세요.">
        <input type="submit" value="Search">
    </form>

</body>
</html>
