데이터베이스 프로그래밍 기말과제 김은영 임지연 홍채영
* * *
## 1. 프로젝트의 목적
공공기관의 부패는 

## 2. 개발 환경 소개 
* 사용한 데이터베이스: Mysql
* 사용한 (백엔드) 서버 사이드 언어: PHP
* 사용한 (프론트엔드) 클라이언트 사이드 언어: HTML
* 사용한 웹 서버 : 윈도우, Apache web server

## 3. 발견한 정보와 유의미한 정보 요약

* 1) 전체 결과 목록
```
    $query = "SELECT city_id, city, s13, s14, s15, s16, s17, e13, e14, e15, e16, e17, i13, i14, i15, i16, i17
              from clean;";
```
* 2) 검색 지역의 청렴도 결과
```
    $name = $_GET['city'];
    $query = "SELECT *
              from clean where city like '%$name%'";
```
* 3) 전체 우수 지역
```
    $query1 = "SELECT city_id, city, s17
              from clean
              ORDER BY s17 DESC LIMIT 30";
    $query2 = "SELECT city_id, city, s16
              from clean
              ORDER BY s16 DESC LIMIT 30";
    $query3 = "SELECT city_id, city, s15
              from clean
              ORDER BY s15 DESC LIMIT 30";
    $query4 = "SELECT city_id, city, s14
              from clean
              ORDER BY s14 DESC LIMIT 30";
    $query5 = "SELECT city_id, city, s13
              from clean
              ORDER BY s13 DESC LIMIT 30";
```
* 4) 전체 하위 지역
```
    $query1 = "SELECT city_id, city, s17
              from clean
              ORDER BY s17 LIMIT 30";
    $query2 = "SELECT city_id, city, s16
              from clean
              ORDER BY s16 LIMIT 30";
    $query3 = "SELECT city_id, city, s15
              from clean
              ORDER BY s15 LIMIT 30";
    $query4 = "SELECT city_id, city, s14
              from clean
              ORDER BY s14 LIMIT 30";
    $query5 = "SELECT city_id, city, s13
              from clean
              ORDER BY s13 LIMIT 30";
```
* 5) 우수 자치도 순위
```
    $query1 = "SELECT city_sub, avg(s17) as 'avg17'
              from clean Group by city_sub ORDER BY avg17 DESC";
    $query2 = "SELECT city_sub, avg(s16) as 'avg16'
             from clean Group by city_sub ORDER BY avg16 DESC";
    $query3 = "SELECT city_sub, avg(s15) as 'avg15'
              from clean Group by city_sub ORDER BY avg15 DESC";
    $query4 = "SELECT city_sub, avg(s14) as 'avg14'
              from clean Group by city_sub ORDER BY avg14 DESC";
    $query5 = "SELECT city_sub, avg(s13) as 'avg13'
              from clean Group by city_sub ORDER BY avg13 DESC";
```
* 6) 종합청렴도가 입력점수를 넘는 구 검색
```
    $query = "select city_id, city, s17
              from clean
              where s17 > '{$_POST['inputvalue']}'
              order by s17 DESC";
```
* 7) 16년도와 17년도 비교
```
    $query = "select city_id, city, ROUND(s17-s16,3),s16,s17
              from clean
              order by s17-s16 DESC;";
```

## 4. 데이터 출처
<a href = https://www.data.go.kr/data/15040621/fileData.do> 공공데이터포털_국민권익위원회_시군구_청렴도측정결과 </a>

## 5. 홈페이지 링크
<a href = http://clean.dothome.co.kr/index.php> 지역별 청렴도 측정 결과 시스템 </a>

## 6. 영상 링크
<a href = https://youtu.be/KvKo7MqqfbM> https://youtu.be/KvKo7MqqfbM </a>
