데이터베이스 프로그래밍 11주차 20172029 김은영 
* * *

## 새로 배운 내용

*select()
```
private void select() {
		Connection conn = null;
		PreparedStatement psmt = null;
		ResultSet rs = null;
		String sql = "select * from LOCATIONS where STREET_ADDRESS like '%Testa'";

		try {
			conn = getConnection();
			psmt = conn.prepareStatement(sql);
			rs = psmt.executeQuery();
			while(rs.next()){
				System.out.println("\tLOCATION_ID : " + rs.getString("LOCATION_ID"));
				System.out.println("\tSTREET_ADDRESS : " + rs.getString("STREET_ADDRESS"));
				System.out.println("\tCITY : " + rs.getString("CITY"));
				System.out.println("\tCOUNTRY_ID : " + rs.getString("COUNTRY_ID"));
			}
		} catch(SQLException e) {
			e.printStackTrace();
		} finally {
			this.closeAll(conn, psmt, rs);
		}
	}
```
```
connection success

	LOCATION_ID : 1100
	STREET_ADDRESS : 93091 Calle della Testa
	CITY : Venice
	COUNTRY_ID : IT
All closed
connection success
```
*update()
```
private void update() {
		Connection conn = null;
		PreparedStatement psmt = null;
		String sql = "update LOCATIONS set LOCATION_ID = '1150' where LOCATION_ID = '1100'";

		try {
			conn = this.getConnection();
			psmt = conn.prepareStatement(sql);
			int count = psmt.executeUpdate();
			System.out.println(count + "row updated");

		} catch(SQLException e) {
			e.printStackTrace();
		} finally {
			this.closeAll(conn, psmt, null);
		}
	}
```
```
0row updated
All closed
connection success

	LOCATION_ID : 1150
	STREET_ADDRESS : 93091 Calle della Testa
	CITY : Venice
	COUNTRY_ID : IT
All closed
connection success
```
*insert()
```
private void insert() {
		Connection conn = null;
		PreparedStatement psmt = null;
		String sql = "insert into LOCATIONS values('1149','6092 Boxwood Testa','YSW 9T2','Whitehorse','Yukon','CA')";

		try {
			conn = this.getConnection();
			psmt = conn.prepareStatement(sql);
			int count = psmt.executeUpdate();
			System.out.println(count + "row inserted");

		} catch(SQLException e) {
			e.printStackTrace();
		} finally {
			this.closeAll(conn, psmt, null);
		}
	}
```
```
1row inserted
All closed
connection success

	LOCATION_ID : 1150
	STREET_ADDRESS : 93091 Calle della Testa
	CITY : Venice
	COUNTRY_ID : IT
	LOCATION_ID : 1149
	STREET_ADDRESS : 6092 Boxwood Testa
	CITY : Whitehorse
	COUNTRY_ID : CA
All closed
connection success
```
*delete()
```
private void delete() {
		Connection conn = null;
		PreparedStatement psmt = null;
		String sql = "delete from LOCATIONS where LOCATION_ID = 1149";

		try {
			conn = this.getConnection();
			psmt = conn.prepareStatement(sql);
			int count = psmt.executeUpdate();
			System.out.println(count + "row deleted");

		} catch(SQLException e) {
			e.printStackTrace();
		} finally {
			this.closeAll(conn, psmt, null);
		}
	}
```
```
1row deleted
All closed
connection success

	LOCATION_ID : 1150
	STREET_ADDRESS : 93091 Calle della Testa
	CITY : Venice
	COUNTRY_ID : IT
All closed
```

## 문제가 발생한 부분이나 고민한 내용 + 해결 과정

* java.sql.SQLSyntaxErrorException, invalid identifier, 
integrity constraint (HR.DEPT_LOC_FK) violated - child record found, 
unique constraint (HR.LOC_ID_PK) violated,SQL command not properly ended 등 
갖가지 오류는 다 본것같다. 대부분이 sql문을 간단하게 수정하면 되는 문제였지만 
정말 많은 시간을 소요했다.

## 회고
 ```
+ 자바로 sql문을 쓰니 새로웠다
- 분명 간단한 과제였던 것 같은데 무엇때문에 시간이 많이 흐른건지 너무 아쉽다
! 그래도 과제를 하고 난 후 뿌듯하고 재미있었다
```

## 영상 링크
<a href = https://www.youtube.com/watch?v=GP1OT0IbGzg&feature=youtu.be> https://www.youtube.com/watch?v=GP1OT0IbGzg&feature=youtu.be </a>
