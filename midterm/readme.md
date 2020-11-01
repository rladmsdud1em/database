데이터베이스 프로그래밍 중간과제 20172029 김은영 
* * *

## 1.개발 환경 소개 : 내가 사용한 환경과 그 이유
# 사용한 데이터베이스: MariaDB
* MySQL보다 빠르고 가볍다. 마리아DB 커뮤니티는 MySQL과 비교해 애플리케이션 부분 속도가 약 4~5천배 정도 빠르며, MySQL이 가지고 있는 모든 제품의 기능을 완벽히 구현하면서도 성능 면에서는 최고 70%의 향상을 보이고 있다고 주장한다.

* MySQL의 문법에 익숙한데 MariaDB는 MySQL과 완벽호환하기때문에 쉽게 갈아탈 수 있다.

# 사용한 (백엔드) 서버 사이드 언어: PHP
# 사용한 (프론트엔드) 클라이언트 사이드 언어: HTML
# 사용한 웹 서버:리눅스와 Apache Web server

* PHP 기본 구조와 주석 <?php?> <?= ?> // 주석 /*여러 줄 주석*/
* 변수 제일 앞에 $ 표시한다. 문자와 숫자, 언더바(_)를 사용할 수 있으나 숫자로 시작할 수 없다. 대소문자를 구분한다.
* print 와 echo 의 차이 / print : 하나의 입력을 받아 리턴, echo : 하나 이상의 문자열 출력
* gettype, settype
* 문자열 문자열은 “” 또는 ‘’ 로 사용. 문자열에 “ 나 ‘ 를 직접 사용하고 싶으면? \(백슬래쉬)를 사용함 \’ \” 문자열 안에 변수를 사용하려면, “” 안에 {} 를 사용한다. 문자와 문자(또는 변수)를 연결할 때는 .(마침표)를 사용한다.
* 제어문 if, if else, if elseif else, switch case, for, while
* 배열
* mysqli, MySQL Improved Extension

## 2. 발견한 정보

* 1) 최신순 영화 목록
'''
  SELECT film_id, title, rental_rate, rental_duration, description
  FROM film
  ORDER BY film_id DESC LIMIT 50;
'''



## 3. 영상 링크
<a href = https://youtu.be/bKfPBxteWUY> https://youtu.be/bKfPBxteWUY </a>
