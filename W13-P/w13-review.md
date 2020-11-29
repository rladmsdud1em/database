데이터베이스 프로그래밍 13주차 20172029 김은영 
* * *

## 새로 배운 내용

*DBConnection
```
package kr.ac.sungshin.w13;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBConnection {
	private static String className = "oracle.jdbc.driver.OracleDriver";
	private static String url = "jdbc:oracle:thin:@localhost:1521:xe";
	private static String user = "hr";
	private static String password = "1234";	
	public static Connection getConnection() {
		Connection conn = null;		
		try {
			Class.forName(className);
			conn = DriverManager.getConnection(url, user, password);			
			System.out.println("connection success");
			return conn;
		} catch (ClassNotFoundException e){
			System.out.println("연결 드라이버 없음");
			return null;
		} catch (SQLException e){
			System.out.print("연결 실패 : ");
			if(e.getMessage().indexOf("ORA-28009") > -1)
				System.out.println("허용되지 않는 접속 권한 없음");
			else if(e.getMessage().indexOf("ORA-01017") > -1)
				System.out.println("유저/패스워드 확인");
			else if(e.getMessage().indexOf("IO") > -1)
				System.out.println("IO - 연결확인!");
			else 
				System.out.println("기본 연결확인!");
			return null;
		}
	}
}
```

## 문제가 발생한 부분이나 고민한 내용 + 해결 과정

* <img src="https://user-images.githubusercontent.com/70553171/100556743-c3dff280-32e7-11eb-8805-83f35e213eb1.png" width="90%"></img>
자바 11버전을 새로 깔고 사용자 환경 변수를 새롭게 설정해주어도 다음과 같은 메세지가 반복적으로 표출됐다. 
재부팅도 해보았지만 결국 8버전을 삭제했다. 후에 수업에 필요하여 다시 재설치했는데 이클립스를 새로 실행할때마다 같은 메세지가 나오고있다.

## 회고
 ```
+ 자바로 회원정보 조회/추가/삭제하는 법을 공부했다
- 자바로 데이터베이스프로그래밍을 하는 것이 훨~~씬 어려운것같다
! 그래도 과제를 하고 난 후 뿌듯하고 재미있었다
```

## 영상 링크
<a href = 'https://youtu.be/otXIpSN6Hl0'> https://youtu.be/otXIpSN6Hl0 </a>
