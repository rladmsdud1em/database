데이터베이스 프로그래밍 중간과제 20172029 김은영 
* * *

## 1.개발 환경 소개 : 내가 사용한 환경과 그 이유
# 사용한 데이터베이스: MariaDB
* 
*

# 사용한 (백엔드) 서버 사이드 언어: PHP
# 사용한 (프론트엔드) 클라이언트 사이드 언어: HTML
# 사용한 웹 서버 : 윈도우

* 
* 
* 

## 2. 발견한 정보와 유의미한 정보

* 1) 최신순 영화 목록
```
  SELECT film_id, title, rental_rate, rental_duration, description
   FROM film
   ORDER BY film_id DESC LIMIT 50;
```
* 2) 낮은 가격순 영화 목록
```
  SELECT film_id, title, rental_rate, rental_duration, description
   FROM film
   WHERE rental_duration = 7
   ORDER BY rental_rate;
```
* 3) 영화 상세 조회
```
   SELECT DISTINCT f.film_id, f.title, f.description, f.release_year, f.language_id, f.rating, c.category_id, a.actor_id
    FROM film f
    INNER JOIN film_category c
        ON c.film_id = f.film_id
    INNER JOIN film_actor a
        ON a.film_id = f.film_id
    WHERE f.film_id = ".$number;
```
* 4) 등급별 영화 수
```
  SELECT rating, COUNT(rating) AS 'number'
   FROM film
   GROUP BY rating
   HAVING number > 0
   ORDER BY number DESC;
```
* 5) 영화 최다 관람 고객 TOP10
```
  SELECT a.customer_id, a.cnt, b.first_name, b.last_name, b.email, b.last_update
    FROM(
    SELECT customer_id, count(*) cnt
    FROM rental
    GROUP BY customer_id
    ORDER BY cnt DESC
    LIMIT 10
    )a
    JOIN
    (SELECT*FROM customer)b
    ON a.customer_id=b.customer_id";
```
* 6) 최고 매출 날짜
```
 SELECT payment_date, COUNT(payment_id)  AS cnt, SUM(amount) AS salesNum
  FROM payment
  GROUP BY payment_date ORDER BY salesNum  DESC LIMIT 20";
```

## 3. 영상 링크
<a href = https://youtu.be/bKfPBxteWUY> https://youtu.be/bKfPBxteWUY </a>
