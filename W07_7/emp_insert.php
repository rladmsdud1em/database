<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템</title>
</head>
<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 신규 직원 등록</h2>
    <form action="emp_insert_process.php" method="POST">
        <label>emp_no: </label>
        <input type="text" name="emp_no" placeholder="직원번호"><br><br>
    
        <label>birth_date: </label>
        <input type="date" name="birth_date" placeholder="생년월일"><br><br>
    
        <label>first_name: </label>
        <input type="text" name="first_name" placeholder="이름"><br><br>
        <label>last_name: </label>
        <input type="text" name="last_name" placeholder="성"><br><br>

        <label>sex: </label>
        <select name="genders" >
            <option value="F">여성</option>
            <option value="M">남성</option>
        </select><br><br>
       
        <label>hire_date: </label>
        <input type="date" name="hire_date" placeholder="퇴사날짜"><br><br>
       
        <input type="submit" value="Create">
    </form>
</body>
</html>
