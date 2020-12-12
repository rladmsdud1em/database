데이터베이스 프로그래밍 기말과제 김은영 임지연 홍채영
* * *

# 지역별 청렴도 측정 결과 시스템

## 1. 프로젝트의 목적
2016년 9월 28일 김영란법이 시행된지 4년이 지났다. 그러나 부정청탁, 금품 수수등 공공기관 부정부패는 계속되고있다. 
<p>이 외에도 성범죄와 음주운전으로 인한 품위손상, 복무규정 위반, 직무 태만, 공문서 위변조같은 문제들은 심각한 사회적 혼란을 야기시킨다.
<p>우리는 법에만 의지하는것에 한계를 두지않고 꾸준히 공공기관의 권력남용을 지켜볼 필요가 있다.
<p>사실 공공기관 청렴도 측정이라는 평가가 이미 존재함에도 널리 알려져있지않아 일반 시민으로서는 특정 기관이 어떤 수준의 청렴도를 가지고 있는지에 대하여 직접적으로 파악하기 어렵다. <p>또한 외부에서 청렴도를 알 수 없다면 그 기관은 청렴 정책에 소홀해질 수밖에 없다. 
<p>따라서 일반 시민들에게 청렴도 측정 평가를 알리고, 하나의 데이터를 다양하게 분석하여 유의미한 정보를 제공하고자 지역별 청렴도 측정 결과 시스템 프로젝트를 진행하였다.

## 2. 개발 환경 소개 
* 사용한 데이터베이스 : Mysql
* 사용한 (백엔드) 서버 사이드 언어 : PHP
* 사용한 (프론트엔드) 클라이언트 사이드 언어 : HTML
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
```
안녕하세요 팀13 김은영 임지연 홍채영입니다
저희팀의 주제는 지역별 청렴도 측정 결과 시스템입니다.
사용한 데이터베이스는 공공데이터포털에서 다운로드받았으며 
국민권익위원회에서 실시한 지방기초단체 청렴도 측정결과로 
종합청렴도, 외부청렴도, 내부청렴도에 대한 결과점수입니다. 

공공기관 청렴도 측정은 공공서비스 유경험자에 대한 설문조사와 
부패발생 현황자료를 기초로 공공기관의 청렴수준과 부패에 취약한 
분야를 객관적으로 진단함으로써 각 기관의 자율적인 개선노력을 
유도하기 위한 목적으로 도입되었다고합니다. 

저희 팀은 이러한 공공기관 청렴도가 2012년 UN공공행정상 
‘공공행정의부패방지 및 척결’ 대상을 수상하였다는 부분에서 
신뢰성이 있다고 판단하였습니다. 그리고 각 지역에서 어떤 결과를 
나타내는지 알아보고 이를 분석하여 유의미한 정보를 전달하고자 
이 데이터베이스를 선정하였습니다. 청렴도가 어떻게 측정되는지는 
아래 링크를 통해 확인부탁드립니다.

이렇게 하나의 데이터베이스 테이블을 가지고 다양한 쿼리를 
작성하여 총 7개의 페이지를 제작하였습니다.

첫째로 전체 지역의 청렴도 결과 목록입니다.
여기서 s는 종합 청렴도, e는 외부 청렴도, i는 내부 청렴도를 
의미합니다. s13은 13년도의 종합청렴도 점수이고 모든 지역의 
청렴도를 13년도부터 17년도까지 확인할 수 있습니다.

둘째, 검색 지역의 청렴도 조회는 검색창의 본인이 조회하고싶은 
지역의 도 또는 시군구를 입력합니다. 검색하면 검색어가 포함된 
데이터들이 city_id순으로 조회된 결과가 나옵니다.

셋째, 넷째, 다섯번째는 각각 시군구별 청렴도 우수지역, 
시군구별 청렴도 하위지역, 우수 자치도별 순위입니다. 
우수지역페이지에서는 지역구분없이 상위 30위까지의 시군구가 
나와있어 어느 곳이 상위권인지 가장 높았던 점수가 몇점인지 
확인가능합니다. 반대로 하위지역페이지에서는 지역구분없이 
하위 30위까지의 시군구가 나와있으며 어느 곳이 하위권인지 
가장 낮은 점수가 몇점인지 확인가능합니다. 우수자치도별 
순위에서는 각 자치도 별 종합청렴도의 평균으로 순위를 
측정하였습니다. 꾸준히 상위권을 차지하는 자치도가 있는 반면 
하위권을 유지하는 자치도도 함께 확인할 수 있습니다.

여섯번째는 입력 점수보다 청렴도가 높은 지역 검색입니다. 
17년도 종합청렴도점수에 숫자를 입력하면 해당점수보다 
높은 지역들의 갯수와 결과가 내림차순으로 조회됩니다.

마지막으로 16년도와 17년도 비교입니다. 16년도에 비해 
17년도 종합청렴도가 상승한 지역과 하락한 지역을 비교할 수 있습니다.

이상으로 데이터베이스프로그래밍 팀13이었습니다. 감사합니다!
```
