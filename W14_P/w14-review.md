데이터베이스 프로그래밍 14주차 20172029 김은영 
* * *

## 새로 배운 내용

*mongoDB
<p>2009년 발표된, 크로스 플랫폼 도큐먼트 지향 데이터베이스 시스템으로 NoSQL, Document 기반, JavaScript 언어를 이용한다.
<p>환경변수 설정
<p>제어판 > 고급 시스템 설정 보기 > 환경변수 > 시스템 변수 Path 선택 > 편집 > 새로 만들기 
<p>C:\Program Files\MongoDB\Server\[버전명]\bin
<p>
<p>mongoDB 클라이언트 실행과 Document 생성메소드
```
> mongo
> use testDB
> db.myCollection.insertOne({x:1}) //한개
{
	"acknowledged" : true,
	"insertedId" : ObjectId("5fc3886158da96854de9efc6")
}
>db.myCollection.insertMany([{x:2, y:3}, {x:4, y:5}, {x:6, y:[7,8,9]}]) //다수
{
	"acknowledged" : true,
	"insertedIds" : [
		ObjectId("5fc38bcf58da96854de9efc7"),
		ObjectId("5fc38bcf58da96854de9efc8"),
		ObjectId("5fc38bcf58da96854de9efc9")
	]
}

```

## 문제가 발생한 부분이나 고민한 내용 + 해결 과정

* 없음

## 회고
 ```
+ mongoDB를 설치하고 게시판모델링실습을 하였다
- 기존의 테이블형식이 아니어서 익숙하지않다
! 지금까지 배웠던것과 달라서 흥미로웠다
```

## 영상 링크
<a href = ''>  </a>
