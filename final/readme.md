데이터베이스 프로그래밍 기말과제 김은영 임지연 홍채영
* * *
## 1. 프로젝트의 목적
2016년 9월 28일 김영란법이 시행된지 4년이 지났다. 그러나 부정청탁, 금품 수수등 공공기관 부정부패는 계속되고있다. 
<p>이 외에도 성범죄와 음주운전으로 인한 품위손상, 복무규정 위반, 직무 태만, 공문서 위변조같은 문제들은 심각한 사회적 혼란을 야기시킨다.
<p>우리는 법에만 의지하는것에 한계를 두지않고 꾸준히 공공기관의 권력남용을 지켜볼 필요가 있다.
<p>사실 공공기관 청렴도 측정이라는 평가가 이미 존재하지만 널리 알려져있지않아 일반 시민으로서는 특정 기관이 어떤 수준의 청렴도를 가지고 있는지에 대하여 직접적으로 파악하기 어렵다. <p>또한 외부에서 청렴도를 알 수 없다면 그 기관은 청렴 정책에 소홀해질 수밖에 없다. 
<p>따라서 일반 시민들에게 청렴도 측정 평가를 알리고 하나의 데이터를 다양하게 분석하여 유의미한 정보를 제공하고자 지역별 청렴도 측정 결과 시스템 프로젝트를 진행하였다.

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
