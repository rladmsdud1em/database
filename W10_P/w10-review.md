데이터베이스 프로그래밍 10주차 20172029 김은영 
* * *

## 새로 배운 내용

*try catch 구문으로 자바 접속
try { 
			Class.forName(driver);	// jdbc 드라이버 로드	
			conn = DriverManager.getConnection(url, user, password); // 오라클 접속
			System.out.println("connection completed");
			conn.close(); // 접속 종료
			System.out.println(conn.isClosed()?"connection closed":"closing connection");
			
		} catch (ClassNotFoundException | SQLException e) //drive와 SQL에러
    {
			System.out.println("connection failed");
			e.printStackTrace(); // 에러 출력
		} 
 
## 회고
 ```
몇개월 전까지만 해도 자바 프로그래밍이 더 익숙했는데
php 몇번 해봤다구 자바로 select문을 작성한 걸보니 낯설다
자바를 보니까 벌써 MySQL과 MariaDB를 배우던 때가 그립다ㅎㅎ
```
